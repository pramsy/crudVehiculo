<?php

namespace App\Http\Controllers;

use App\Carro;
use App\Combustivel;
use App\TipoCambio;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    //
    public function index(){
        return View('admin.carro.index');
    }
    
    public function getCadastro(){
        return View('admin.carro.cadastro',
            [
                'carro'=> []
            ]);
    }
    public function postCadastro(Request $request){
        $regras = [
        'model'=>'required',
        'marca'=>'required',
        'quantidade_portas'=>'required',
        'ano_fabricacao'=>'required',
        'tipo_cambio_id'=>'exists:tipo_cambios,id',
        'combustivel_id'=>'exists:combustivels.id'
        ];
        $fedback = [
            
            'required'=> 'O campo  :attribute é obrigatório'
        ];
        $request->validate($regras, $fedback);
        //Inclusão
        if($request->input('_token') != '' && $request->input('id') == ''){

            $carro = new Carro();
            $carro->fill($request->all());
            $carro->save();
        }
        //Edição
        if($request->input('_token') != '' && $request->input('id') != ''){
            $carro = Carro::find($request->input('id'));
            $carro->update($request->all());

        }
        
        return redirect()->route('admin.carro.listar');

    }
    public function getListar(Request $request){
        $carros = Carro::paginate(2);
        return View('admin.carro.listar',['carros' => $carros, 'request'=>$request->all()]);

    }
    
    public function Pesquisar(Request $request){
        $carros = [];
        if(!empty($request->input('model')) || !empty($request->input('marca'))){
            $carros = Carro::where('model','like','%'.$request->input('model').'%')
                ->where('marca','like','%'.$request->input('marca').'%')->paginate(2);
           
        }
        return View('admin.carro.listar',['carros' => $carros, 'request'=>$request->all()]);
    }
    public function Edit($id){
        $carro = Carro::find($id);
        return view('admin.carro.cadastro', ['carro' => $carro ]);

    }
    public function Delete($id){
        
        Carro::find($id)->delete();       
        return redirect()->route("admin.carro.listar");
       
    }
}
