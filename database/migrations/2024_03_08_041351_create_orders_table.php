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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable;
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->integer('quantity')->nullable; 
            $table->string('name')->nullable; 
            $table->decimal('price')->nullable; 
            $table->string('address')->nullable;
            $table->string('province')->nullable;
            $table->string('country')->nullable;
            $table->Integer('postalcode')->nullable;
            $table->Integer('phonenumber')->nullable;
            $table->string('payment_method')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
