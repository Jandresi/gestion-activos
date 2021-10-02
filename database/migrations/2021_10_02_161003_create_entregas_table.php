<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('creador')->unsigned();
            $table->bigInteger('elemento')->unsigned();
            $table->integer('unidades');
            $table->bigInteger('recibe')->unsigned();
            $table->timestamps();

            $table->foreign('creador')->references('id')->on('users');
            $table->foreign('elemento')->references('id')->on('activos');
            $table->foreign('recibe')->references('id')->on('receptors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entregas');
    }
}
