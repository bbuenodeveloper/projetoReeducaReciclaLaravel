<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\empresa;
use App\cidade;
use App\material;
use App\Newsletter;

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

    public function relatorioCidades (Request $request){
        $cidades = Cidade::paginate(25);
                return view('relatorio-Cidades',['cidades'=>$cidades]);
        }

    public function relatorioMateriais (Request $request){
        $materiais = Material::paginate(25);
                return view('relatorio-Materiais',['materiais'=>$materiais]);
        }

    public function relatorioNewsletter (Request $request){
        $newsletters = Newsletter::paginate(25);
                return view('relatorio-Newsletter',['newsletters'=>$newsletters]);
            }

}
