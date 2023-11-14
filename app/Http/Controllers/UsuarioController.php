<?php

namespace App\Http\Controllers;

use App\Administrador;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function index(){
        return View('admin.usuario.index');
    }
    public function getCadastro(){
        return View('admin.usuario.cadastar');
    }
    public function postCadastro(Request $request){
        $user = new Administrador();
        $user->fill($request->all());        
        //$user->save();
        dd($user->getAttributes());

    }
    public function getListar(Request $request){
        echo 'Construção';

    }
}
