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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('match_id')->constrained('matches')->onDelete('cascade');  // O'yin ID
            $table->foreignId('player_id')->constrained('players')->onDelete('cascade');  // Gol urgan o'yinchi ID
            $table->foreignId('team_id')->constrained('teams')->onDelete('cascade');  // Gol urgan jamoa ID
            $table->integer('minute');  // Qaysi daqiqada urilgan
            $table->enum('goal_type', ['Regular', 'Penalty', 'Own Goal'])->default('Regular');  // Gol turi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
