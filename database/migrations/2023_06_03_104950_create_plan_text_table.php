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
        Schema::create('plan_text', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image'); 
            $table->string('description')->default(null);
            $table->longText('description1')->default(null);
            $table->longText('description2')->default(null);
            $table->longText('description3')->default(null);
            $table->longText('description4')->default(null);
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_text');
    }
};
