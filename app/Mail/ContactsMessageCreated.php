<?php

namespace App\Mail;
use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contacts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactsMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    //création de nos variables globales de message

 
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $msg)
    {
        //Passage des variables à la vue

        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()

    {
        return $this->from($this->msg->email, $this->msg->name)//pour réécupérer les données utilisées lors de l'envoi de l'email
        
        ->markdown('emails.messages.created');
    }
}
