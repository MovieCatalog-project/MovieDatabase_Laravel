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
        Schema::create('filmek_kulcsszavai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film')->constrained('film')->onDelete('cascade');
            $table->foreignId('kulcsszo')->constrained('kulcsszo')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmek_kulcsszavai');
    }
};
