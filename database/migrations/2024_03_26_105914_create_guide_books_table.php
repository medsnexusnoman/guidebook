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
        Schema::create('guide_books', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->text('apartment_no')->nullable();
            $table->text('street_no')->nullable();
            $table->text('street_name')->nullable();
            $table->text('city');
            $table->text('country');
            $table->text('postal_code');
            $table->text('address_linking_rule');
            $table->text('state');
            $table->text('descriptive_name');
            $table->text('image')->nullable();

            $table->unsignedBigInteger('user_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guide_books');
    }
};
