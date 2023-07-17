<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SkuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'weight' => $this->weight,
            'color' => $this->color,
            'skuCode' => $this->skuCode,
            'productId' => $this->productId,
            'countryOfOrigin' => $this->countryOfOrigin,
            'price' => $this->price,
            'quantityInStock' => $this->quantityInStock,
            'createdAt' => $this->created_at,
            'updatedAt' => $this->updated_at
        ];
    }
}
