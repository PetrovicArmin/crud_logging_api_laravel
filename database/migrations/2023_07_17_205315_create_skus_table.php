<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skus', function (Blueprint $table) {
            $table->id()->index();
            $table->timestamps();
            $table->float('weight')->nullable(true);
            $table->string('color')->nullable(true);
            $table->string('skuCode')->unique('skuCodeIndex')->nullable(false);
            $table->foreignId('productId')->index('productIdIndex')->nullable(false);
            $table->foreign('productId')->references('id')->on('products');
            $table->string('countryOfOrigin')->nullable(true);
            $table->float('price')->nullable(false);
            $table->integer('quantityInStock')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skus');
    }
};
