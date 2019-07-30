<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;

class NewsletterController extends Controller
{
    public function home(Request $request){
        if($request->isMethod('GET')){
            return view("home");
        }

        $novaNews = new Newsletter();
        $novaNews->email = $request->email;
        $resultado = $novaNews->save();

        if($resultado){
            return view ('home');
        }

    }
}
