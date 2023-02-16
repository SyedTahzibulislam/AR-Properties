<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eventcration;

class singleeventController extends Controller
{
      public function index( Request $request)
  {
	  $eventcration =eventcration::findOrfail( $request->id);
	   


return view('BICTSOFT.event-single', compact('eventcration') );
  }	  
}
