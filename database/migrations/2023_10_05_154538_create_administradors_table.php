<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nome',100);
            $table->date('data_nascimento');
            $table->unsignedBigInteger('cpf');
            $table->string('celular',20);
            $table->string('email',80)->unique();
            $table->unsignedBigInteger('cep');
            $table->string('cidade',80);
            $table->string('estado',50);
            $table->string('bairro',80);
            $table->string('rua',100);
            $table->string('numero',8);
            $table->string('complemento',80)->nullable();
            $table->string('login',20)->default('user') ;
            $table->string('senha',80);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administradors');
    }
}
