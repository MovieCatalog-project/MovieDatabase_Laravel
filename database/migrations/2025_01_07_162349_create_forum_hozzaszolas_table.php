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
        Schema::create('forum_hozzaszolas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('felhasznaloi_profil')->nullable()->constrained('felhasznaloi_profil')->onDelete('set null');
            $table->foreignId('forum_tema')->constrained('forum_tema')->onDelete('cascade');
            $table->text('szoveg');
            $table->timestamp('hozzaszolas_datum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_hozzaszolas');
    }
};
