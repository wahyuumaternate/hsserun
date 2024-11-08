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
        Schema::create('road_race', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('biaya');
            $table->boolean('paling_laris')->default(false); // Field paling_laris
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('road_race');
    }
};
