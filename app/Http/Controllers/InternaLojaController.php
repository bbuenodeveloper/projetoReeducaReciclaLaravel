<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class InternaLojaController extends Controller
{
    public function interna(){
        return view('internaProduto');
    }

    public function exibirProdutoUnico(Request $request){
        $produtos = Produto::all();
       
        return view("internaProduto",['produtos'=>$produtos]);
   
}
   
}
