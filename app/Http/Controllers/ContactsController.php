<?php

namespace App\Http\Controllers;

use App\Mail\ContactsMessageCreated;
use App\Models\Message;
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

        //instance de model Message

        $message = Message::create($request->only('name','email','message'));
        /*$message->name = $request->name;
        $message->email = $request->eamail;
        $message->message = $request->message;
        $message->save();*/

        //pour envoyer notre mail
        $mailable = new ContactsMessageCreated($message);
        // $mailable = new ContactsMessageCreated($request->name, $request->email, $request->msg
        Mail::to('jeandedieu.twagirumuhoza@gmail.com')
            ->queue(new ContactsMessageCreated($message));

        //flashy nous permettrad'afficher un message après l'envoi du formulaire

        flashy('Message bien envoyé, nous reviendrons vers vous dans les plus brefs délais!');

        //après l'nvoi du formulaire, on redirige le client vers la page d'accueil

        return redirect()->route('root_path');

      $this->validate($request, [
          'name' => 'required|min:3',
          'email' => 'required|email',
          'message' => 'required|min:10',

           ]);
      

    }
}
