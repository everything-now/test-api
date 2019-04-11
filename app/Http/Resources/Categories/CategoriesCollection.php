<?php

namespace App\Http\Resources\Categories;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategoriesCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'count' => $this->collection->count(),
            'link' => url()->full(),
            'data' => CategoryResource::collection($this->collection),
        ];
    }
}
