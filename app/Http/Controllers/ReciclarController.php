<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReciclarController extends Controller
{
    public function comoReciclar(Request $request) {
        if($request->isMethod('GET')){
            return view('como-reciclar');
        }

    }
}

