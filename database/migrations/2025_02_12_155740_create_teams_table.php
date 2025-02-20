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
            $table->integer('team_value');
            $table->date('foundation_year');
            $table->string('president');
            $table->integer('palmares');
            $table->string('city');
            $table->string('main_sponsor');
            $table->text('team_logo')->nullable();
            $table->text('url_logo')->nullable();
            $table->text('stadium_url')->nullable();
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
