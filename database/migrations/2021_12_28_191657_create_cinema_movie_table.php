<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinemaMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinema_movie', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('showing_time');
            $table->unsignedBigInteger('cinema_id');
            $table->foreign('cinema_id')->references('id')->on('cinemas')->onDelete('cascade'); 
            $table->unsignedBigInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cinema_movie');
    }
}
