<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::table('properties', function (Blueprint $table) {
        $table->unsignedBigInteger('city_id')->nullable()->after('location');

        // Optional: Add foreign key constraint
        $table->foreign('city_id')->references('id')->on('cities')->onDelete('set null');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            //
        });
    }
};
