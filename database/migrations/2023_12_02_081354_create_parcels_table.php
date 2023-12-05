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
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('courier_id');

            $table->string('name');
            $table->text('description');
            $table->text('shipping_company');
            $table->text('tracking_number');
            $table->text('file');
            $table->tinyInteger('status')->default(0);
            // default 0=>Task Received, 1=>Package Received, 2=>Package Shipped

            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('courier_id')->references('id')->on('couriers')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }


      

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcels');
    }
};
