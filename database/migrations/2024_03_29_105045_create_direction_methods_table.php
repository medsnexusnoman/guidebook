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
        Schema::create('direction_methods', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('direction_description');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('guidebook_id');
            $table->unsignedBigInteger('direction_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direction_methods');
    }
};
