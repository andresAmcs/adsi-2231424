<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique;
            $table->string('image')->default('images/no-game.png'); /* default es valor por defecto */
            $table->text('description');
            $table->unsignedBigInteger('user_id');/* llave foranea */
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('category_id');/* llave foranea */
            $table->foreign('category_id')->references('id')->on('categories'); /* referenciacion de la llave foranea */
            $table->boolean('slider')->default(0);
            $table->float('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
