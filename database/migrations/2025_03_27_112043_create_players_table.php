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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // O'yinchi ismi
            $table->date('birthdate');  // Tug'ilgan sana
            $table->enum('position', ['Goalkeeper', 'Defender', 'Midfielder', 'Forward']);  // O'yinchi pozitsiyasi
            $table->foreignId('team_id')->constrained('teams')->onDelete('cascade'); // O'yinchi jamoasi
            $table->string('nationality')->nullable(); // Millati
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
