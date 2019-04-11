<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\Products\ProductResource;
use App\Http\Resources\Products\ProductsCollection;

class ProductController extends Controller
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
        $orderBy = request()->get('orderBy') == 'desc' ? 'desc' : 'asc';

        $products = Product::query()->with('categories', 'creator');

        if($category = request()->get('category')){
            $products->whereHas('categories', function($query) use ($category){
                $query->where('category_id', $category);
            });
        }

        if($sortBy){
            if($sortBy == 'date'){
                $sortBy = 'created_at';
            }

            $products->orderBy($sortBy, $orderBy);
        }

        if(request()->has('limit')){
            $products->limit(request()->get('limit'));
        }

        return new ProductsCollection($products->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product($request->all());
        $product->creator_id = \Auth::guard('api')->id();

        $product->save();

        $product->categories()->sync($request->get('categories'));

        return response()->json(['message' => 'success', 'link' => route('products.show', $product->id)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->load('categories', 'creator');

        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->fill($request->all());
        
        $product->save();

        $product->categories()->sync($request->get('categories'));

        return response()->json(['message' => 'success', 'link' => route('products.show', $product->id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        
        return response()->json(['message' => 'success']);
    }
}
