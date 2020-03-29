<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactsMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //on précise ici la vue qui sera utilisé pour notre mail
        return $this->view('layouts.emails.messages.created')
        //on passe des variables à notre message
        ->with([
            'name' => 'Jean de Dieu',
            'email' => 'jeandedieu.twagirumuhoza@gmail.com',
            'msg' => 'Votre joli message',

        ]);
    }
}
