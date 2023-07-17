<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    use HasFactory;

    protected $fillable = [
        'weight',
        'color',
        'skuCode',
        'productId',
        'countryOfOrigin',
        'price',
        'quantityInStock'
    ];
}
