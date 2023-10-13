<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    
    protected $fillable = ['nome','celular','email','motivo_contato','mensagem'];
}
