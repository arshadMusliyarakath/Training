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
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('movie_id');
            $table->text('movie_name');
            $table->text('movie_poster');
            $table->text('movie_genre');
            $table->string('language',15);
            $table->text('movie_description');
            $table->integer('movie_year');
            $table->string('movie_rating');
            $table->text('permalink');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
