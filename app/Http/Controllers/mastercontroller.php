<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\slideshow;

use App\Models\service;

use App\Models\property; 
use App\Models\team;

class mastercontroller extends Controller
{
     public function index()
	{
		$slide  = slideshow::all();
		$service = service::all();
		$prop = property::all();
		$proplatest = property::latest()->take(5)->get();
		$tea= team::all();
		$searchprice = property::distinct()->orderBy('price', 'DESC')->get(['price']);
		$searcharea = property::distinct()->get(['area']);
		$searchlocation = property::distinct()->get(['searchlocation']);
		
		 return view('BICTSOFT.master',compact('prop', 'slide', 'service', 'tea','proplatest','searchprice','searcharea','searchlocation' ));
	}
	
	   public function logout()
    {
    	Auth::logout();

    	return redirect()->to('/Arp');
    }
}
