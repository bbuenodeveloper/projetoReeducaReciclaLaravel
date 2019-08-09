<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class AdminController extends Controller

{
    public function addAdmin(Request $request){
        if($request->isMethod('GET')){
            return view('add-admin');
        }
    }

    protected function cadastrarAdmin(array $data)
    {
        return User::cadastrarAdmin([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nivel_user'=> 0,
        ]);
    }

}
