<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_activo', 60);
            $table->string('codigo_referencia', 20);
            $table->bigInteger('tipo_activo')->unsigned();
            $table->integer('cantidad');
            $table->timestamps();

            $table->foreign('tipo_activo')->references('id')->on('tipo_activos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activos');
    }
}
