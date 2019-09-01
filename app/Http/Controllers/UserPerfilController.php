<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class UserPerfilController extends Controller
{
    public function userPerfil(Request $request) {
        $user = auth()->user();
        return view('editar-userPerfil', ['authUser' => $user] );
    }

    public function editarPerfil (Request $request){
        $user = auth()->user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->sobrenome = $request->sobrenome;

        $caminhoPrivadoImg = $request['avatar']->store('avatars', ['disk' => 'public_uploads']);
        $caminhoPublicoImg = "uploads/$caminhoPrivadoImg";
        $user->img = $caminhoPublicoImg;

        $user->save();

        return view('/editar-userPerfil', ['authUser' => $user]);
    }
}
