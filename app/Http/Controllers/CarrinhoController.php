<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class CarrinhoController extends Controller
{
    public function carrinho(){
        return view('carrinho');
    }

    public function carrinhoProduto(Request $request, $id){
        $produto = Produto::find($id);
        return view("carrinho",['produto'=>$produto]);

}
}
