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
        Schema::create('indexs', function (Blueprint $table) {
            $table->id();
            $table->string('tittle_larg')->default(null);
            $table->string('tittle_small')->default(null);
            $table->string('button_r')->default(null);
            $table->string('button_l')->default(null);
            $table->string('button_1r')->default(null);
            $table->string('button_2c')->default(null);
            $table->string('button_3l')->default(null);
            $table->string('image')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indexs');
    }
};
