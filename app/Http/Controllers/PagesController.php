<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Méthode pour afficher la page Qui sommes-nous
    
    public function about(){

        return view('layouts.pages.about');

    }
}
