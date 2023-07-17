<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSkuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'weight' => 'numeric|gte:0',
            'color' => 'alpha',
            'skuCode' => 'required|unique:skus|string|size:8',
            'productId' => 'required|exists:products,id',
            'countryOfOrigin' => 'alpha',
            'price' => 'required|numeric|gte:0',
            'quantityInStock' => 'required|integer|gte:0'
        ];
    }
}
