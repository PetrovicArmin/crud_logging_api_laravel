<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function product(): BelongsTo {
        return $this->belongsTo(Product::class, 'productId');
    }
}
