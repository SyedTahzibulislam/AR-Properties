<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\messagesend;

class showmessage extends Controller
{
	
		    public function __construct()
    {
		 $this->middleware(['auth','verified']);
       
          //	   $this->middleware('auth');
    }
    public function index()
    {
$msg = messagesend::latest()->paginate(10);
  
        return view('message.index',compact('msg'))
            ->with('i', (request()->input('page', 1) - 1) * 10); 
		
		//
    }
	
	
	public function delete($id)
	{
		messagesend::where('id', $id )->delete();
	  return redirect()->back();
	}
}
