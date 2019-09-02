<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagamento;

class PagamentoController extends Controller
{
    public function addPagamento (){
        return view ('add-pagamento');
    }

    public function cadastrarPagamento (Request $request){
        $pagamento = new Pagamento();
        $pagamento->modo_pagamento = $request->nome;
        $pagamento->save();
    }
}
