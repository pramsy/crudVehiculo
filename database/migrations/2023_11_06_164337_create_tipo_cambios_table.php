<?php

use App\TipoCambio;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoCambiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_cambios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo_cambio',30);
            $table->timestamps();
        });
        // Criando chave estrangeira tipocambio_id na tabela carros
        Schema::table('carros', function (Blueprint $table) {
            $table->foreign('tipo_cambio_id')->references('id')->on('tipo_cambios');
        });
        // popular a tabela tipo_cambios
        TipoCambio::create(['tipo_cambio'=>'Manual']);
        TipoCambio::create(['tipo_cambio'=>'Automático']);
        TipoCambio::create(['tipo_cambio'=>'Automatizado']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('carros',function(Blueprint $table){
            $table->dropForeign('carros_tipo_cambio_id_foreing');
            });
        Schema::dropIfExists('tipo_cambios');
    }
}
