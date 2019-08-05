<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    public function loja(){
        return view ('loja');
    }
}
