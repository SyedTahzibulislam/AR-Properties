<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\slideshow;

use App\Models\serv;

use App\Models\property; 
use App\Models\team; 
use App\Models\sendcomment;

class indexcontroller extends Controller
{
    public function index()
	{
		$slide  = slideshow::all();
		$service = serv::all();
		$prop = property::all();
		$proplatest = property::latest()->take(5)->get();
		$tea= team::all();
		$searchprice = property::distinct()->orderBy('price', 'DESC')->get(['price']);
		$searcharea = property::distinct()->get(['area']);
		$searchlocation = property::distinct()->get(['adress_line2']);
		
		$comment= sendcomment::where('approve', 1)->get();
	
		
		 return view('BICTSOFT.index',compact('prop', 'slide', 'service', 'tea','proplatest','searchprice','searcharea','searchlocation','comment' ));
	}
	
	   public function logout()
    {
    	Auth::logout();

    	return redirect()->to('/');
    }

}
