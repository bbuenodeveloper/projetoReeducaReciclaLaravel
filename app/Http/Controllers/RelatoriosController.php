<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\empresa;

class RelatoriosController extends Controller
{

    public function relatorioUsers (Request $request){
        $users = User::paginate(25);
                return view('relatorio-Users',['users'=>$users]);
        }

    public function relatorioEmpresas (Request $request){
        $empresas = Empresa::paginate(25);
                return view('relatorio-Empresas',['empresas'=>$empresas]);
        }

}
