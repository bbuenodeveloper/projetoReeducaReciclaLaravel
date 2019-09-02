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

    public function apagarCategoria(Request $request, $id){
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect('relatorio-Categorias');
    }

}
