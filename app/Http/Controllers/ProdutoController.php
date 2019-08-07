<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;


class ProdutoController extends Controller
{
    public function addProduto(Request $request){
        return view ('add-produto');
    }

    public function cadastrarProduto(Request $request){
        return Produto::create([
            'name' => $request->name,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'quantidadeEstoque'=> $request->quantidadeEstoque,
            'categoria'=> $request->categoria,
            'imagem'=>$request->imagem
        ]);
    }


   

}
