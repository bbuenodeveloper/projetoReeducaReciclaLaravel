<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class DadosCompraController extends Controller
{
    public function dadoscompra(){
        return view('dadoscompra');
    }

    public function dadosProduto(Request $request, $id){
        $produto = Produto::find($id);
        return view("dadosCompra",['produto'=>$produto]);

}
}
