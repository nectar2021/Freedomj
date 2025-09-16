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

    Schema::create('properties', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique();
        $table->string('location');
        $table->integer('price');
        $table->integer('bedrooms')->nullable();
        $table->integer('bathrooms')->nullable();
        $table->integer('size')->nullable(); // e.g., sqft
        $table->string('thumbnail')->nullable();
        $table->boolean('is_featured')->default(false);
        $table->enum('status', ['rent', 'sale', 'sold'])->default('sale');
        $table->text('description')->nullable();
        $table->timestamps();
    });
}

   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
