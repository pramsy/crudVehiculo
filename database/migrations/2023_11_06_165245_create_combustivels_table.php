<?php

use App\Combustivel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCombustivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combustivels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('combustivel',15);
            $table->timestamps();
        });
        // Criando chave estrangeira combustivel na tabela carros
        Schema::table('carros', function (Blueprint $table) {
            $table->foreign('combustivel_id')->references('id')->on('combustivels');
        });
        // popular a tabela combustivels
        Combustivel::create(['combustivel'=>'Flex']);
        Combustivel::create(['combustivel'=>'Gasolina']);
        Combustivel::create(['combustivel'=>'Álcool']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carros',function(Blueprint $table){
            $table->dropForeign('carros_combustivel_id_foreing');
            });
        Schema::dropIfExists('combustivels');
    }
}
