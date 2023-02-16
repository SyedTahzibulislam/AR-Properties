<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sendcomment;
use Illuminate\Support\Facades\Auth;

class sendcommentcontroller extends Controller
{
        public function __construct()
    {
		 $this->middleware(['auth']);
       
          //	   $this->middleware('auth');
    }
	
	
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$id= Auth::user()->id;
		
		
		
					if ($id == $request->user_id)
		{
  		 $request->validate([

             
             'name' => ['required','string','max:255'],
			 'mobile',
			 
		  
			'body'=> ['required','string'],
			
		   
		          ]);
				 $input = $request->all();
			 sendcomment::create($input); 
			 
			 return redirect()->back()
                        ->with('success','মন্তব্যটি করার জন্য মোবারাকবাদ!! ');
    }
	else {
		abort(403);
	}      
		
	
		
		

    
	}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $sendcomment)
    {
         sendcomment::where('user_id', $sendcomment )->delete();
  
        return redirect()->back()
                        ->with('success','মন্তব্যটি মুছা হয়েছে ');
    }
}
