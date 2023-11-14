<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carro extends Model
{
  
    protected $fillable = ['model','marca','quantidade_portas','ano_fabricacao','tipo_cambio_id','combustivel_id'];
    public function tipo_cambio(){
        return $this->hasOne('App\TipoCambio','id','tipo_cambio_id');
    }
    public function combustivel(){
        return $this->hasOne('App\Combustivel','id','combustivel_id');
    }
    
}
