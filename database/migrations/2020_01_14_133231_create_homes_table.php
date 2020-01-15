<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('container1titulo');
            $table->string('container1subtitulo');
            $table->string('container1descricao', 600);
            $table->string('container1imagem');
            $table->string('container1titulo2');
            $table->string('container1subtitulo2');
            $table->string('container1descricao2', 600);
            $table->string('container1imagem2');
            $table->string('container2titulo');
            $table->string('container2descricao', 600);
            $table->string('container2imagem');
            $table->string('container3titulo');
            $table->string('container3subtitulo');
            for($i = 1;$i < 7; $i++) {
                $table->string('container3icone'.$i);
                $table->string('container3titulo'.$i);
                $table->string('container3descricao'.$i, 600);
            }
            $table->string('container4titulo');
            $table->string('container4link');
            $table->string('container4imagem');

            $table->string('container5titulo');
            $table->string('container5descricao', 600);
            for($i = 1;$i < 4; $i++) {
                $table->string('container5icone'.$i);
                $table->string('container5titulo'.$i);
                $table->string('container5descricao'.$i, 600);
                $table->string('container5background'.$i);
            }
            $table->string('container6imagem');
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
        Schema::dropIfExists('homes');
    }
}
