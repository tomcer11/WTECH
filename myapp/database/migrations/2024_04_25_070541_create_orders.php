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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 20);
            $table->decimal('price', total: 3, places: 2);
        });

        Schema::create('shipments', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 20);
            $table->decimal('price', total: 3, places: 2);
        });

        Schema::create('adresses', function (Blueprint $table){
            $table->id();
            $table->string('street', length: 30);
            $table->integer('house_number');
            $table->string('city', length: 30);
            $table->string('country', length: 52);
            $table->string('postcode', length: 5);
            $table->timestampsTz();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payments')->constrained();
            $table->foreignId('shipments')->constrained();
            $table->foreignId('users')->constrained();
            $table->boolean('status');
            $table->decimal('total_price', total: 8, places: 2);
            $table->timestampsTz();
        });

        Schema::create('order_specifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('orders')->constrained();
            $table->foreignId('adresses')->constrained();
            $table->string('name', length: 50);
            $table->string('surname', length: 50);
            $table->string('email', length: 254);
            $table->string('phone_number', length: 12);
            $table->timestampsTz();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {  
        Schema::dropIfExists('order_specifications');
        Schema::dropIfExists('adresses');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('shipments');
        Schema::dropIfExists('payments');      
    }
};
