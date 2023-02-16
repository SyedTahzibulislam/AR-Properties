<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use App\Models\team; 

class singlepagecontroller extends Controller
{
  public function index( Request $request)
  {
	  $pro=property::find( $request->id);
	    $t = team::find(2);


return view('BICTSOFT.property-single', compact('pro','t') );
  }	  
	
	
	//
}
