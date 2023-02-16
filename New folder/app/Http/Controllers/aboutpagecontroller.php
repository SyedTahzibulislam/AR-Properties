<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about; 

use App\Models\team; 

class aboutpagecontroller extends Controller
{
     public function index()
	{
		$tea= team::all();
		
		$about= about::all();
		
		
		
		 return view('BICTSOFT.about',compact('about','tea', ));
	}
}
