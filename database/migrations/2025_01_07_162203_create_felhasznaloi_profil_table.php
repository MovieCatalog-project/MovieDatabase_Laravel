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
        Schema::create('felhasznaloi_profil', function (Blueprint $table) {
            $table->id();
            $table->string('felhasznaloi_nev');
            $table->string('email_cim')->unique();
            $table->string('nev');
            $table->enum('nem', ['F', 'N']);
            $table->year('szul_ev');
            $table->boolean('admin_e')->default(false);
            $table->boolean('torolt_felhasznalo')->default(false);
            $table->timestamp('torles_datum')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('felhasznaloi_profil');
    }
};
