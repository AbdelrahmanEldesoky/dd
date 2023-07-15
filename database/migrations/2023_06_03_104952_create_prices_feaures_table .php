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
        Schema::create('prices_feaures', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('description');
            $table->string('price');
            $table->string('feaure1');
            $table->string('feaure2');
            $table->string('feaure3');
            $table->string('feaure4');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices_feaures');
    }
};
