<?php

namespace App\Http\Controllers;

use App\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    //
    
    public function getCadastro(){
        return View('carro');
    }
    public function postCadastro(Request $request){
        $carro = new Carro();
        $carro->fill($request->all());
        //$carro->save();
        dd($carro->getAttributes());

    }
}
