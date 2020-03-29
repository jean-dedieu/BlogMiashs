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

    public function store(Request $request){

        //store(Request $request)


     //dd('toto');
      //die and dump pour tester


      $this->validate($request, [
          'name' => 'required|min:3',
          'email' => 'required|email',
          'message' => 'required|min:10',

           ]);
      

    }
}
