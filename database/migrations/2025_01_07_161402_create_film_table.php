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
        Schema::create('film', function (Blueprint $table) {
            $table->id();
            $table->string('cím'); // Title of the film
            $table->text('leírás')->nullable(); // Description
            $table->year('megjelen_év'); // Release year
            $table->integer('hány_perc'); // Runtime in minutes
            $table->string('filmposter_url')->nullable(); // Poster URL
            $table->string('filmelőzetes_url')->nullable(); // Trailer URL
            $table->string('filmstáb_url')->nullable(); // Crew URL
            $table->timestamps(); // Created_at and Updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};
