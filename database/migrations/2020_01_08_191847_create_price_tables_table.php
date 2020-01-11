<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('titulo2');
            $table->string('subtitulo2');
            $table->string('descricao', 900);
            $table->string('planoesquerdatitulo');
            $table->string('planoesquerdasubtitulo');
            $table->string('precoesquerda');
            $table->string('esquerdalista1');
            $table->string('esquerdalista2');
            $table->string('esquerdalista3');
            $table->string('esquerdalista4');
            $table->string('esquerdalink');
            $table->string('planocentrotitulo');
            $table->string('planocentrosubtitulo');
            $table->string('precocentro');
            $table->string('centrolista1');
            $table->string('centrolista2');
            $table->string('centrolista3');
            $table->string('centrolista4');
            $table->string('centrolink');
            $table->string('planodireitatitulo');
            $table->string('planodireitasubtitulo');
            $table->string('precodireita');
            $table->string('direitalista1');
            $table->string('direitalista2');
            $table->string('direitalista3');
            $table->string('direitalista4');
            $table->string('direitalink');
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
        Schema::dropIfExists('price_tables');
    }
}
