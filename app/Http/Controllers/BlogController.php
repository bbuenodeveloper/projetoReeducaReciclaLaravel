<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(Request $request) {
        if($request->isMethod('GET')){
            return view('blog');
        }
}

    public function blogdetails(Request $request) {
        if($request->isMethod('GET')){
            return view('blog-details');
        }
    }

    public function addPostagem(Request $request) {
        if($request->isMethod('GET')){
            return view('add-postagens');
        }

    }

    public function addTag(Request $request) {
        if($request->isMethod('GET')){
            return view('add-tagBlog');
        }

    }

}
