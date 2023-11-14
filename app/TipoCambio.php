<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCambio extends Model
{
    protected $fillable = ['tipo_cambio'];
    protected $table = 'tipo_cambios';
    
}
