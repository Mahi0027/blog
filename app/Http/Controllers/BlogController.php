<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function full_article(){
        return view('one_blog');
    }
}
