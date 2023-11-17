<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('admin.administrador.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.administrador.cadastro',['administrador'=>[]]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'nome'=>'required|min:3|max:50',
            'celular'=>'required',
            'email'=>'required|unique:administradors,email',
            'data_nascimento'=>'required',
            'cpf'=>'required|unique:administradors,cpf',
            'cep'=>'required',
            'cidade'=>'required',
            'estado'=>'required',
            'bairro'=>'required',
            'rua'=>'required',
            'numero'=>'required',
            'login'=>'required|unique:administradors,login',
            'login_confirm'=>'required|same:login',
            'senha'=>'required',
            'senha_confirm'=>'required|same:senha'
        ];

        $fedback = [
                
            'required'=> 'O campo  :attribute deve ser prenchido',
            'nome.min'=>'O campo Nome deve ter no minimo 3 carateres',
            'nome.max'=>'O campo nome deve ter no maximo 50 Caratere',
            'login_confirm.same'=>' Esse Campo dever ser igual ao login',
            'senha_confirm.same'=>' Esse Campo dever ser igual ao senha',
            'unique'=>'Os dados do campo :attribute existe ja vo sistema'
        ];

        $request->validate($regras, $fedback);
       Administrador::create($request->all());        
        
        
        return redirect()->route('user.listar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $administrador = Administrador::find($id);
        if($administrador){
            
            return View('admin.administrador.read', ['administrador'=> $administrador]);
    
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrador = Administrador::find($id);
        return View('admin.administrador.update',['administrador'=> $administrador]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $administrador = Administrador::find($id);
       $administrador->update($request->all());
        return redirect()->route('user.show',['id'=>$administrador->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Administrador::find($id);
        if($del){
            $del->delete();
        }
        return redirect()->route('user.listar');
        
    }
    public function getListar(Request $request){

        $administradores = Administrador::paginate(2);
        return View('admin.administrador.listar',['administradores' => $administradores, 'request'=>$request->all()]);

    }
    public function Pesquisar(Request $request){
        $administradores = [];
        if(!empty($request->input('nome')) || !empty($request->input('email'))){
            $administradores = Administrador::where('nome','like','%'.$request->input('nome').'%')
                ->where('email','like','%'.$request->input('email').'%')->paginate(2);
           
        }
        return View('admin.administrador.listar',['administradores' => $administradores, 'request'=>$request->all()]);
    }

}
