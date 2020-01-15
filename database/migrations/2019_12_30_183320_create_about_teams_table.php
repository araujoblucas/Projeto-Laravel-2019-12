<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 500);
            $table->string('subtitulo', 500);
            $table->string('tituloImagem', 500);
            $table->string('subtituloImagem', 500);
            $table->string('desc1', 500);
            $table->string('desc2', 500);
            $table->string('imagem', 500);
            $table->string('dado1', 500);
            $table->string('descdado1', 500);
            $table->string('dado2', 500);
            $table->string('descdado2', 500);
            $table->string('dado3', 500);
            $table->string('descdado3', 500);
            $table->string('dado4', 500);
            $table->string('descdado4', 500);
            $table->string('contatoTitulo', 500);
            $table->string('contatodesc', 500);
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
        Schema::dropIfExists('about_teams');
    }
}
