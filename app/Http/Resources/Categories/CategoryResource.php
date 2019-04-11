<?php

namespace App\Http\Resources\Categories;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'creatorName' => $this->creator->name,
            'createdAt' => $this->created_at->format('Y-m-d H:i'),
            'link' => route('categories.show', $this->id),
            'productsLink' => route('products.index', ['category' => $this->id]),
        ];
    }
}
