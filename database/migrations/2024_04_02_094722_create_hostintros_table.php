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
        Schema::create('hostintros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guidebook_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name_of_card');
            $table->string('host_name');
            $table->string('phone');
            $table->string('email');
            $table->text('introduction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hostintros');
    }
};
