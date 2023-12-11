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
        Schema::create('food_restaurant', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('restaurant_id');
            $table->unsignedBigInteger('food_id');

            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('food_id')->references('id')->on('food')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // $table->dropForeign(['restaurant_id']);
        // $table->dropForeign(['food_id']);
        Schema::dropIfExists('food_restaurant');
    }
};
