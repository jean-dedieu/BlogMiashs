<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //Méthode pour le formulaire de contact

    public function create(){

        //dd('contat'); die and dump pour tester

        return view('layouts.contacts.create');
    }
}
