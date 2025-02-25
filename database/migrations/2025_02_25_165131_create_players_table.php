<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('role');
            $table->string('nationality');
            $table->float('market_value');
            $table->string('fav_foot');
            $table->float('height');
            $table->text('img')->nullable();
            $table->integer('number')->nullable();
            $table->foreignId('team_id')->constrained();
            $table->foreignId('coach_id')->constrained();
            $table->foreignId('shirt_id')->constrained();
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