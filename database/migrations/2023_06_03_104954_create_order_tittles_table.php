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
        Schema::create('order_tittles', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('description');
            $table->string('note1');
            $table->string('note2');
            $table->string('note3');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_tittles');
    }
};
