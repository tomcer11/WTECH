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
            $table->unsignedBigInteger('main_category_id');
            $table->string('category', length: 10);
            $table->text('description');
            $table->string('banner_path', length: 200);
            $table->string('small_banner_path', length: 200);
            $table->timestampsTz();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('main_category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->integer('price');
            $table->string('producer', length: 20);
            $table->string('model', length: 100);
            $table->integer('model_year');
            $table->string('frame', length: 20);
            $table->string('fork_type', length: 20);
            $table->enum('frame_size', ['S', 'M', 'L', 'XL']);
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
            $table->string('brakes', length: 100);
            $table->string('front_rotor', length: 100);
            $table->string('rear_rotor', length: 100);
            $table->string('stem', length: 100);
            $table->string('handbar', length: 100);
            $table->string('grip', length: 100);
            $table->string('seat_post', length: 100);
            $table->string('seat', length: 100);
            $table->boolean('is_new');
            $table->boolean('is_offer_of_the_week');
            $table->timestampsTz();
        });

        Schema::create('item_order', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('order_id');
            $table->integer('quantity');
            $table->decimal('price', total: 8, places: 2);
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('name', length: 44);
            $table->string('path', length: 200);
            $table->string('alt_text', length: 20);
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
