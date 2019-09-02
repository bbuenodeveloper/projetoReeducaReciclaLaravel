<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Pagamento;

class DadosCompraController extends Controller
{
    public function dadoscompra(Request $request){
        return view('dadoscompra');

    }

    public function dadosProduto(Request $request, $id){
        $produto = Produto::find($id);
        $pagamentos = Pagamento::all();
        return view("dadoscompra",['produto'=>$produto,
        'pagamentos' => $pagamentos
        ]);

}
}
