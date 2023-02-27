<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('juegos',function(Blueprint $table){
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->integer('anho',false,true);
            $table->bigInteger('plataforma_id')->unsigned();
            $table->bigInteger('genero_id')->unsigned();
            $table->bigInteger('estado_id')->unsigned();
            $table->foreign('plataforma_id')->references('id')->on('plataformas')->onDelete('cascade');
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('juegos');
    }
};
