<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{

    public function home(Request $request){
        if($request->isMethod('GET')){
            return view("home");
        }

        $messages = [
            'unique'=> "Esse email já existe!",
            'required' => "Você deve digitar um e-mail",
            'email' => "Você deve digitar um email valido!"
        ];

        $xpto = Validator::make($request->all(), [
            'email' => 'required|Unique:Newsletters|email'
        ],$messages)->validate();

        $novaNews = new Newsletter();
        $novaNews->email = $request->email;
        $resultado = $novaNews->save();



            return view ('home',["resultado"=>$resultado]);

    }
}
