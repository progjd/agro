<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view ('login.index');
    }

    public function entrar (Request $req){
        $this->validate($req, [
            'email'=>'required|email',
            'senha'=>'required|min:6',
        ],[
            'email.required'=>'Preencha um E-mail',
            'email.email'=>'Preencha um E-mail válido',
            'senha.required'=>'Senha minimo 6 caracteres',
        ]);
        $dados = $req->all();
        if(Auth::Attempt(['email'=>$dados['email'], 'password'=>$dados['senha']])){
            return redirect()->route('admin.cursos');
        }
        return redirect()->route('login.index');
    }

    public function sair(){
        Auth::logout();
        return redirect()->route('site.home');
    }

}
