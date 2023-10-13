<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $fillable = ['model','marca','quantidade_portas','ano_fabricacao','tipo_cambio','combustival'];
}
