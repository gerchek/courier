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
        Schema::create('couriers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->text('address');
            $table->text('city');
            $table->text('state');
            $table->text('phone_number');
            $table->text('salary');
            $table->text('used');
            $table->tinyInteger('status')->default(0);
            // default 0=>Fresh синий цвет, 1=>Active зеленый, 2=>Problems Красный
            $table->date('ip_last_login');
            $table->string('payment_method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couriers');
    }
};
