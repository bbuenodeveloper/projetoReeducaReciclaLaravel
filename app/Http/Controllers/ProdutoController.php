<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;


class ProdutoController extends Controller
{
    public function addProduto(Request $request){
        return view ('add-produto');
    }

    public function cadastrarEmpresa(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->imagem = $request->imagem;
        $produto->quantidade_estoque = $request->quantidade_estoque;
        $produto->categorias_id = $request->categorias_id;
        $produto->save();

        return response()->json(['produto' => "Produto cadastrado com sucesso!"]);
    }
    }





