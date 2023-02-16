<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class translatecontroller extends Controller
{
   public function index(Request $request, $locale)
   {
   
    session(['session_key' => $locale]);
	return redirect()->back();
   
   }
}
