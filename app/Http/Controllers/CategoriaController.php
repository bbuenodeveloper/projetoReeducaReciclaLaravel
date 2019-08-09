<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function categorias(){
        return view ('add-categoria');
    }

    public function cadastrarCategoria(Request $request){
        $categoria = new Categoria();
            $categoria->nome = $request->nome;
            $categoria->save();

            return response()->json(['categoria' => "Categoria cadastrada com sucesso!"]);
    }

}
