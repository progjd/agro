<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contato;

class contatoController extends Controller
{
    public function index(){
        $contatos = [
            (object)["nome"=>"Cristo", "fone"=>"123345"],
            (object)["nome"=>"Salva", "fone"=>"123345"]
        ];
        
        $contato = new Contato();
        $cont = $contato->lista();
        dd($cont->nome);
        
        return view ('contato.index', compact('contatos'));
        
    }

    public function criar(Request $dados){
        return view ('contato.index');
    }
    
    
}
