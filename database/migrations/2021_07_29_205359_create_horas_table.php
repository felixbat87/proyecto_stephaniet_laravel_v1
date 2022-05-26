<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hora', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->bigIncrements('ID_MARCACION');
            $table->bigInteger('USUARIO_ID')->unsigned();
            $table->foreign('USUARIO_ID')->references('CODIGO_USUARIO')->on('muci2');
            $table->string('FECHA');
            $table->string('ENTRADA');
            $table->string('SALIDA');
            $table->string('HORAS_TRABAJADAS');
            $table->integer('HORAS_EXTRAS');
            $table->string('COMENTARIOs');
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
        Schema::dropIfExists('hora');
    }
}
