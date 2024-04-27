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
            $table->integer('price');
            $table->string('producer', length: 20);
            $table->string('model', length: 100);
            $table->integer('model_year');
            $table->string('frame', length: 20);
            $table->string('fork_type', length: 20);
            $table->string('frame_size', length: 2);
            $table->integer('front_lift');
            $table->string('fork', length: 100);
            $table->string('rear_shock', length: 100);
            $table->string('front_tire', length: 100);
            $table->string('rear_tire', length: 100);
            $table->string('rim', length: 100);
            $table->integer('cassette_count');
            $table->integer('front_cassette_count');
            $table->string('chain', length: 100);
            $table->string('drive_train', length: 100);
            $table->string('cranks', length: 100);
            $table->string('cassette', length: 100);
            $table->string('derailleur', length: 100);
            $table->string('breaks', length: 100);
            $table->string('brakes', length: 100);
            $table->string('front_rotor', length: 100);
            $table->string('rear_rotor', length: 100);
            $table->string('stem', length: 100);
            $table->string('handbar', length: 100);
            $table->string('grip', length: 100);
            $table->string('seat_post', length: 100);
            $table->string('seat', length: 100);
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
