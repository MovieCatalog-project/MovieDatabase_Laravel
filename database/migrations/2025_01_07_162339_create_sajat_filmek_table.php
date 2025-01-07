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
        Schema::create('sajat_filmek', function (Blueprint $table) {
            $table->id();
            $table->foreignId('felhasznaloi_profil')->constrained('felhasznaloi_profil')->onDelete('cascade');
            $table->foreignId('film')->constrained('film')->onDelete('cascade');
            $table->timestamp('mikor')->nullable();
            $table->integer('ertekeles')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sajat_filmek');
    }
};
