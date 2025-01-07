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
        Schema::create('forum_tema', function (Blueprint $table) {
            $table->id();
            $table->foreignId('felhasznaloi_profil')->nullable()->constrained('felhasznaloi_profil')->onDelete('set null');
            $table->string('tema');
            $table->timestamp('temainditas_ideje');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_tema');
    }
};
