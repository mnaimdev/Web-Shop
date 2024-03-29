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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->integer('after_discount');
            $table->integer('brand_id')->nullable();
            $table->longText('long_desp');
            $table->string('short_desp')->nullable();
            $table->string('slug');
            $table->string('preview')->nullable();
            $table->boolean('preorder')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
