<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact; 

class contactpagecontroller extends Controller
{
         public function index()
	{
	
		$con = contact::all();
	
		
		 return view('BICTSOFT.contact',compact('con' ));
	}
}
