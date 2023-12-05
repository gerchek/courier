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
        Schema::table('couriers', function (Blueprint $table) {
            //
            $table->string('ip_last_login')->nullable()->change();
            $table->string('last_entry_date')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('couriers', function (Blueprint $table) {
            //
            $table->string('ip_last_login')->change();
            $table->string('last_entry_date')->change();

        });
    }
};
