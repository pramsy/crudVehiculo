<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin(Request $request){
        $error = '';
        switch($request->get("error")){
            case 1:
                $error = 'Usuario o Senha não existe';
                break;
            case 2:
                $error = 'Necessario Fazer login para ter acesso';

        }
        return view("site.login",
            [
                "error" => $error
        ]);
    }
    
    public function postLogin(Request $request){
        $regras = [
            'email'=>'email',
            'password'=>'required'
        ];
        $fedback = [
            'email.email'=> 'O campo login(e-mail) é obrigatótio',
            'password.required'=> 'O campo senha é obrigatório'
        ];
        $request->validate($regras, $fedback);
        $user = User::where('email', $request->email)->where('password', $request->password)->get()->first();
        if(isset($user->name)){
            session_start();
            $_SESSION['nome'] = $user->name;
            $_SESSION['email'] = $user->email;
            
            return redirect('/admin/inicio');
        }else{
            return redirect()->route('site.login',['error' => 1]);
        }

    }
    public function sair(){
        session_destroy();
        return redirect()->route('site.inicio');
    }
}
