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
            $table->string('location');
            $table->decimal('price', 10, 2);
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('balconies');
            $table->boolean('furnished');
            $table->integer('area');
            $table->integer('floor');
            $table->integer('total_floors');
            $table->boolean('ready_to_move');
            $table->string('facing');
            $table->integer('age_of_construction');
            $table->text('additional_rooms')->nullable();
            $table->text('amenities')->nullable();
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
