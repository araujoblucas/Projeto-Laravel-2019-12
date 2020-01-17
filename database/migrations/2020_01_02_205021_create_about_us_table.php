<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('titulo2');
            $table->string('subtitulo2');
            $table->text('sobre', 1200);
            $table->string('video');
            $table->string('imagem');
            $table->string('dado1');
            $table->string('descdado1');
            $table->string('dado2');
            $table->string('descdado2');
            $table->string('dado3');
            $table->string('descdado3');
            $table->string('imagemdesc');
            $table->string('titulo3');
            $table->string('subtitulo3');
            $table->string('descesq', 800);
            $table->string('descdir', 800);
            $table->string('estatistica1');
            $table->string('descestatistica1');
            $table->string('estatistica2');
            $table->string('descestatistica2');
            $table->string('estatistica3');
            $table->string('descestatistica3');
            $table->string('estatistica4');
            $table->string('descestatistica4');
            $table->string('imagemfaq');
            $table->string('imagemcontato');
            $table->string('titulocontato');
            $table->string('telefone');
            $table->string('email');
            $table->string('atendimento');
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
        Schema::dropIfExists('about_us');
    }
}
