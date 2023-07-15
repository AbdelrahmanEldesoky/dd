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
        Schema::create('our_fetures', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->string('description');
            $table->string('feture1');
            $table->string('description1');
            $table->string('feture2');
            $table->string('description2');
            $table->string('feture3');
            $table->string('description3');
            $table->string('feture4');
            $table->string('description4');
            $table->string('image');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_fetures');
    }
};
