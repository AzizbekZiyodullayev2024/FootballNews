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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');  // Yangilik sarlavhasi
            $table->text('content');  // Yangilik matni
            $table->string('image')->nullable();  // Yangilik rasmi
            $table->foreignId('match_id')->nullable()->constrained('matches')->onDelete('cascade'); // O'yinga bog'langan yangilik
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
