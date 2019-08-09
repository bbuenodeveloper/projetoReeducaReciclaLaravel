<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller

{
      
    public function addAdmin(Request $request){
        if($request->isMethod('GET')){
            return view('add-admin');
        }
    }

    protected function cadastrarAdmin(Request $request)
    { 
        $admin =  User::create([
            'name' => $request -> name,
            'sobrenome' => "Admin",
            'cep' => "00000000",
            'email' => $request -> email,
            'password' => Hash::make($request -> password),
            'nivel_user'=> 0,
        ]);
        $admin->save();
        return redirect('/add-admin');
    }

    protected function mostrarLista(){  
        $adminlista = User::where('nivel_user', 0)->get();
        return view('mostarAdmin', ['adminLista' => $adminlista]);
    }
}
