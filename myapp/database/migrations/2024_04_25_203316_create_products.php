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
        Schema::create('main_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category', length: 10);
            $table->timestampsTz();
        });

        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category', length: 10);
            $table->timestampsTz();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('main_categories')->constrained();
            $table->foreignId('sub_categories')->constrained();
            $table->timestampsTz();
        });

        Schema::create('item_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('products')->constrained();
            $table->foreignId('orders')->constrained();
            $table->integer('quantity');
            $table->decimal('price', total: 8, places: 2);
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('products')->constrained();
            $table->string('name', length: 20);
            $table->string('path', length: 50);
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::dropIfExists('item_order');
        Schema::dropIfExists('images');
        Schema::dropIfExists('products');
        Schema::dropIfExists('sub_categories');
        Schema::dropIfExists('main_categories');
    }
};
