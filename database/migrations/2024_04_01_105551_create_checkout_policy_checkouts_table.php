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
        Schema::create('checkout_policy_checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('guidebook_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('checkout_id');
            $table->unsignedBigInteger('checkout_option_policy_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout_policy_checkouts');
    }
};
