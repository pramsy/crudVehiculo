<?php

namespace App\Http\Controllers;

use App\Contato;
use App\MotivoContato;
use Illuminate\Http\Request;


class ContatoController extends Controller
{
    //
    public function getIndex(){
        $motivo_contato = MotivoContato::all();
        return View('site.contato',
            [
                'motivo_contato'=>$motivo_contato
            ]);
    }

    public function enviarMensagem(Request $request){
        $request->validate(
            [
                'nome'=> 'required |min:3| max:60',
                'celular' => 'required',
                'email' => 'email',
                'motivo_contato' => 'required',
                'mensagem' => 'required| max:1500',
            ],
            [
                'required' => 'O campo :attribute deve ser preenchido'
            ]
        );
        Contato::create($request->all());
        return redirect()->route('/');
       

    }
    
    public function getEmail(){
        return View('site.email');
    }
}
