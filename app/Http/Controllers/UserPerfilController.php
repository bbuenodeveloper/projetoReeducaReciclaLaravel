<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPerfilController extends Controller
{
    public function userPerfil(Request $request) {
        if($request->isMethod('GET')){
            return view('userPerfil');
        }

    }
}
