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
            $categoria->nome_categoria = $request->nome_categoria;
            $categoria->save();

           
    }

}
