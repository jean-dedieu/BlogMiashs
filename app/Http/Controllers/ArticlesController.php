<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    function article()
    {
        $myposts = \App\Post::all(); 
        return view('articles',array(
            'posts' => $myposts
        ));
    }
}
