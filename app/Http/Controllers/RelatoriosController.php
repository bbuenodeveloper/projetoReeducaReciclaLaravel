<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\empresa;
use App\cidade;
use App\material;
use App\Newsletter;
use App\Post;

class RelatoriosController extends Controller
{

    public function relatorioAdmins (Request $request){
        $query = User::query();
        $query->where('nivel_user','=', 0);
        $users = $query->paginate(25);

        return view('relatorio-Admins', ['admin'=>$users]);
        }

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

    public function relatorioPosts (Request $request){
        $posts = Post::paginate(25);
                return view('relatorio-Posts',['posts'=>$posts]);
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
