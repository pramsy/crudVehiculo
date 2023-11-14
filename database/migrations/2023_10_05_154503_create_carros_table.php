<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('model',100);
            $table->string('marca',100);
            $table->integer('quantidade_portas');
            $table->year('ano_fabricacao');
            $table->unsignedBigInteger('tipo_cambio_id');
            $table->unsignedBigInteger('combustivel_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carros');
    }
}
