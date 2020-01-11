<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigDefaultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_defaults', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('icone');
            $table->string('telefone');
            $table->string('email');
            $table->string('atendimento');
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('descricaofooter', 900);
            $table->string('contatolinha1footer');
            $table->string('contatolinha2footer');
            $table->string('contatolinha3footer');
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
        Schema::dropIfExists('config_defaults');
    }
}
