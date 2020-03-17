<?php

namespace App\Http\Controllers;

use App\Email;

use App\Http\Requests\EmailRequest;


class EmailController extends Controller
{
	public function getForm()
	{
		return view('email');
	}

    
    public function postForm(EmailRequest $request)
	{
        
		$email = new Email;
		
	
		$email->contact_email= $request->input('contact_email');
		$email->contact_name= $request->input('contact_name');
       
        $email->contact_message= $request->input('contact_message');
		
		$email->save();
		
        
     
       
		
		return view('email_ok');
	}
	
   
}
?>