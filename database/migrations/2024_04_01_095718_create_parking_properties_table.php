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
        Schema::create('parking_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guidebook_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('parking_id');
            $table->unsignedBigInteger('parking_option_property_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parking_properties');
    }
};
