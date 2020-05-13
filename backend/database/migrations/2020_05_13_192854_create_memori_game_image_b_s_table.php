<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemoriGameImageBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memori_game_image_b_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('memori_game_image_a_s_id')->unsigned();
            $table->text('image');
            $table->timestamps();
            $table->foreign('memori_game_image_a_s_id')->references('id')->on('memori_game_image_a_s')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memori_game_image_b_s');
    }
}
