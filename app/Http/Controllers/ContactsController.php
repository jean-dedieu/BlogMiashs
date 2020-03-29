<?php

namespace App\Http\Controllers;

use App\Mail\ContactsMessageCreated;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    //Méthode pour le formulaire de contact

    public function create(){

        //dd('contat'); die and dump pour tester

        return view('layouts.contacts.create');
    }

    public function store(Request $request){

          //dd('toto');
         //die and dump pour tester

        //pour envoyer notre mail
        $mailable = new ContactsMessageCreated($request->name, $request->email, $request->msg);
        Mail::to('jeandedieu.twagirumuhoza@gmail.com')->send($mailable);

        return 'reussi';

      /*$this->validate($request, [
          'name' => 'required|min:3',
          'email' => 'required|email',
          'message' => 'required|min:10',

           ]);*/
      

    }
}
