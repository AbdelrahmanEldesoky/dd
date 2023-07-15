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
        Schema::create('comment_tittles', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('description1');
            $table->string('feture1');
            $table->string('feture2');
            $table->string('description2');
            $table->string('phone');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_tittles');
    }
};
