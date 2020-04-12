<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

     //middleware auth pour acceder à la page d'accueil, possibilité de le modifier
    /*
    midlleware
    */
      public function __construct()
    {
        $this->middleware('auth');
    }
    
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $troisPosts = \App\Post::orderBy('post_date', 'desc')->take(3)->get();
        return view('welcome',array(
            'posts' => $troisPosts
        ));
    }
}
