<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id()->unsigned()->bigIncrements();
            $table->unsignedBigInteger('product_id');
            $table->bigInteger('user_id')->unsigned(); // Removed autoIncrement()
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('pic');
            $table->string('product_name');
            $table->string('description');
            $table->integer('quantity');
            $table->decimal('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
