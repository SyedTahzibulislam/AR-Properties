<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\messagesend; 



class sendmessagecontroller extends Controller
{


	
	
    public function index( request $request)
	{	   



		
		
		
		 

		 $request->validate([


             'name' => ['required','string','max:255'],
			 'mobile'=>['required','max:255'],
			 
		    'title'=> ['required','string','max:255'],
			'body'=> ['required','string'],
			
		   
		          ]);
				 $input = $request->all();
			 messagesend::create($input); 
			 
			 return redirect()->back()
                        ->with('success','Your message has been sent.We will contact with you soon');
       
		
	} 
}
