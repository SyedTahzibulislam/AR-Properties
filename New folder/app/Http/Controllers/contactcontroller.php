<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact; 

class contactcontroller extends Controller
{
		    public function __construct()
    {
		 $this->middleware(['auth','verified']);
       
          //	   $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $con = contact::latest()->paginate(5);
  
        return view('contact.index',compact('con'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
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
                  $request->validate([

'mobile',
'email',
'facebook',
'youtube',
'instragram',
'map',
'address', 
'whatsappnumber',
'whatsapptext',
'latitude',
'longitude',

      ]);
			
			
			
			
		  $input = $request->all();

      
       
	    contact::create($input);
        
        return redirect()->route('contact.index')
                        ->with('success','Data insterted successfully.');
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
    public function edit(contact $contact)
    {


	  return view('contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
                  $request->validate([

'mobile',
'email',
'facebook',
'youtube',
'instragram',
'map',
'address',    
'whatsappnumber',
'whatsapptext',
'latitude',
'longitude',


   ]);
			
			
			
			 $input = $request->all();

       
        $contact->update($input);
  
        return redirect()->route('contact.index')
                        ->with('success',' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
       	        $contact->delete();
  
        return redirect()->route('contact.index')
                        ->with('success','Deleted successfully');
    }
}
