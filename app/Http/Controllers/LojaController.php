<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Categoria;

class LojaController extends Controller
{
    public function loja(Request $request) {
        // if($request->isMethod('GET')){
        //     return view('loja');
        // }
        $produto = new Produto();
        $produtos = $produto->paginate(9);
        $categorias = Categoria::all();
        return view("loja",['produtos'=>$produtos, 'categorias'=>$categorias]);

    }
}
