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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team1_id')->constrained('teams')->onDelete('cascade'); // Birinchi jamoa
            $table->foreignId('team2_id')->constrained('teams')->onDelete('cascade'); // Ikkinchi jamoa
            $table->integer('score1')->default(0); // Birinchi jamoa gollari
            $table->integer('score2')->default(0); // Ikkinchi jamoa gollari
            $table->dateTime('match_date');  // O'yin sanasi
            $table->string('stadium'); // Stadion nomi
            $table->foreignId('tournament_id')->constrained('tournaments')->onDelete('cascade'); // Turnir ID
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
