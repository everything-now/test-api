<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\Categories\CategoryResource;
use App\Http\Resources\Categories\CategoriesCollection;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->validate(request(), [
            'sortBy' => 'in:name,date,price', 
            'limit' => 'integer|min:1'
        ]);

        $sortBy  = request()->get('sortBy');
        $orderBy = request()->get('orderBy') == 'asc' ? 'asc' : 'desc';
        
        $categories = Category::query()->with('creator');

        if($sortBy = request()->get('sortBy')){
            if($sortBy == 'date'){
                $sortBy = 'created_at';
            }
            
            $categories->orderBy($sortBy, $orderBy);
        }

        if(request()->has('limit')){
            $categories->limit(request()->get('limit'));
        }


        return new CategoriesCollection($categories->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category($request->all());
        $category->creator_id = \Auth::guard('api')->id();

        $category->save();

        return response()->json(['message' => 'success', 'link' => route('categories.show', $category->id)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->fill($request->all());
        
        $category->save();

        return response()->json(['message' => 'success', 'link' => route('categories.show', $category->id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        
        return response()->json(['message' => 'success']);
    }
}
