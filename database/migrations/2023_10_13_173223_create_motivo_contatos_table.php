<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\MotivoContato;

class CreateMotivoContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criando tabela motivo_contatos
        Schema::create('motivo_contatos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('motivo_contato',20);
            $table->timestamps();
        });
        // Criando chave estrangeira motivo_contato_id na tabela contato
        Schema::table('contatos', function (Blueprint $table) {
            $table->foreign('motivo_contato_id')->references('id')->on('motivo_contatos');
        });
        // popular a tabela motivo_contatos
        MotivoContato::create(['motivo_contato'=>'Dúvida']);
        MotivoContato::create(['motivo_contato'=>'Elogio']);
        MotivoContato::create(['motivo_contato'=>'Sugestão']);
        MotivoContato::create(['motivo_contato'=>'Reclamação']);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contatos',function(Blueprint $table){
        $table->dropForeign('contatos_motivo_contato_id_foreing');
        });
        Schema::dropIfExists('motivo_contatos');
    }
}
