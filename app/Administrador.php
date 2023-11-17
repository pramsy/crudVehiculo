<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = ['nome','data_nascimento','cpf','celular','email','cep','cidade','estado','bairro','rua','numero','complemento','login','user','senha'];
    protected $assignable = ['email', 'password'];
    protected $protected = ['password'];

}
