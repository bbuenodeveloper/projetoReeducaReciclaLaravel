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

    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'nivel_user' => ['required', 'tinyInteger'],          
        ]);
    }

    
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nivel_user'=> 0,            
        ]);
    }

   
}
