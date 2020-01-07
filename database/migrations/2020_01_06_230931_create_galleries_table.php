<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->boolean('booleangrid')->default(1);
            $table->string('titulogrid')->nullable();
            $table->string('subtitulogrid')->nullable();
            $table->string('imagemgrid1')->nullable();
            $table->string('imagemgrid2')->nullable();
            $table->string('imagemgrid3')->nullable();
            $table->string('imagemgrid4')->nullable();
            $table->boolean('booleanhorizontal')->default(1);
            $table->string('titulohorizontal')->nullable();
            $table->string('subtitulohorizontal')->nullable();
            $table->string('imagemhorizontal1')->nullable();
            $table->string('legendahorizontal1')->nullable();
            $table->string('imagemhorizontal2')->nullable();
            $table->string('legendahorizontal2')->nullable();
            $table->string('imagemhorizontal3')->nullable();
            $table->string('legendahorizontal3')->nullable();
            $table->string('imagemhorizontal4')->nullable();
            $table->string('legendahorizontal4')->nullable();
            $table->string('imagemhorizontal5')->nullable();
            $table->string('legendahorizontal5')->nullable();


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
        Schema::dropIfExists('galleries');
    }
}
