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
        Schema::create('food_orders', function (Blueprint $table) {
            $table->id();
            $table->string('food_name')->nullable();
            $table->string('food_price')->nullable();
            $table->string('food_quantity')->nullable();
            $table->string('user_name')->nullable();
            $table->string('user_email')->nullable();
            $table->string('user_phone')->nullable();
            $table->string('user_city')->nullable();
            $table->string('user_state')->nullable();
            $table->string('user_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_orders');
    }
};
