<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property; 

class propertygridcontroller extends Controller
{
        public function index()
	{
	
		$prop = property::all();
		
		
		 return view('BICTSOFT.property-grid',compact('prop' ));
	}
}
