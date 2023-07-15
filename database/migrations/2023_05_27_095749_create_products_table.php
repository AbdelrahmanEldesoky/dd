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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default(null);
            $table->string('user')->default(null);
            $table->unsignedBigInteger('category_id');
            $table->string('description')->default(null);
            $table->longText('description1')->default(null);
            $table->longText('description2')->default(null);
            $table->longText('description3')->default(null);
            $table->longText('description4')->default(null);
            $table->string('date_at')->default(null);
            $table->string('image')->default(null);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
