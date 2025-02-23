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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('stadium');
            $table->bigInteger('team_value');
            $table->date('foundation_year');
            $table->string('president');
            $table->unsignedInteger('palmares');
            $table->string('city');
            $table->string('main_sponsor');
            $table->text('team_logo')->nullable();
            $table->text('url_logo')->nullable();
            $table->text('stadium_url')->nullable();
            $table->text('home_kit')->nullable();
            $table->text('away_kit')->nullable();
            $table->text('third_kit')->nullable();
            $table->text('gk_home_kit')->nullable();
            $table->text('gk_away_kit')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
