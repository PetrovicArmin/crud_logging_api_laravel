<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'summary',
        'details',
        'productType'
    ];

    public function skus(): HasMany {
        return $this->hasMany(Sku::class, 'productId', 'id');
    }
}
