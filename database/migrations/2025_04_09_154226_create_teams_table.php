<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id('team_id');
            $table->string('name', 100);
            $table->string('country', 50)->nullable();
            $table->string('league', 100)->nullable();
            $table->integer('founded_year')->nullable();
            $table->string('stadium', 100)->nullable();
            $table->string('coach', 100)->nullable();
            $table->string('logo_url', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};

