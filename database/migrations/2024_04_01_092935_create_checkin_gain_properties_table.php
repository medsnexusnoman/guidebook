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
        Schema::create('checkin_gain_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guidebook_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('checkin_id');
            $table->unsignedBigInteger('check_inproperties_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkin_gain_properties');
    }
};
