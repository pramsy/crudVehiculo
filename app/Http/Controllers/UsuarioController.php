<?php

namespace App\Http\Controllers;

use App\Administrador;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function getCadastro(){
        return View('usuario');
    }
    public function postCadastro(Request $request){
        $user = new Administrador();
        $user->fill($request->all());        
        //$user->save();
        dd($user->getAttributes());

    }
}
