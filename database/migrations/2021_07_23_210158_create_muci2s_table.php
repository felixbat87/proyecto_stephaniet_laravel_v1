<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuci2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muci2', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->bigIncrements('CODIGO_USUARIO');
            $table->string('NOMBRE',25);
            $table->string('APELLIDO',25);
            $table->string('NOMBRE_USUARIO',25);
            $table->string('CORREO',100);
            $table->string('DIRECCION',100);
            $table->string('CARGO',100);
            $table->string('PASSWORD',100);
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
        Schema::dropIfExists('muci2');
    }
}
