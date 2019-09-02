<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class CarrinhoController extends Controller
{
    public function carrinho(Request $request){
        if ($request->session() -> has('carrinho')) {
            $carrinho = session() ->get('carrinho');
        }
    }

    public function carrinhoProduto(Request $request, $id){

        $produto = Produto::find($id);
        return view("carrinho",['produto'=>$produto]);



    }

    public function addCarrinho(Request $request, $id) {
        if ($request->session() ->has('carrinho')) {
            $carrinho = session() ->get('carrinho');
            $carrinho[] = $id;
            $request->session() ->put('carrinho', $carrinho);
        } else {

            $carrinho [] = $id;
            $request->session() ->put('carrinho', $carrinho);
        }

        return redirect('/carrinho');
    }
}
