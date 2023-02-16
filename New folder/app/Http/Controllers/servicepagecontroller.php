<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\serv ;
use App\Models\team;

class servicepagecontroller extends Controller
{
    public function index(Request $request)
	
	
	{
		
		
		
		
		$serv = serv::find( $request->id);
		$tea= team::all();
		
		
		
		
		return view('BICTSOFT.servicepage', compact('serv', 'tea') );
		
		
	}
}
