<?php

namespace App\Http\Resources\Products;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'price' => $this->price,
            'description' => $this->description,
            'creatorName' => $this->creator->name,
            'createdAt' => $this->created_at->format('Y-m-d H:i'),
            'categories' => CategoryResource::collection($this->categories),
            'link' => route('products.show', $this->id),
        ];
    }
}
