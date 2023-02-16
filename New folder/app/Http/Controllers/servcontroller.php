<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\serv; 

class servcontroller extends Controller
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
       $serv = serv::latest()->paginate(5);
  
        return view('serv.index',compact('serv'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )   
    {
                  $request->validate([

		 'service_name',
'description_1st'=>'max:400' ,
'description_2nd',
'description_3rd',
'description_4th',
'description_5th',
'slogan_1',
'slogan_2',
'starting_date',

'bnservice_name',
'bndescription_1st'=>'max:400' ,
'bndescription_2nd',
'bndescription_3rd',
'bndescription_4th',
'bndescription_5th',
'bnslogan_1',
'bnslogan_2',
'bnstarting_date',
            
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',        ]);
			
			
			
			
		  $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
		
	
       
	    serv::create($input);       
        
        return redirect()->route('serv.index')
                        ->with('success','Service created successfully.');
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
    public function edit(serv $serv)
    {
         return view('serv.edit',compact('serv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, serv $serv )
    {
                        $request->validate([

		 'service_name',
'description_1st'=>'max:400',
'description_2nd',
'description_3rd',
'description_4th',
'description_5th',
'slogan_1',
'slogan_2',
'starting_date',

'bnservice_name',
'bndescription_1st'=>'max:400',
'bndescription_2nd',
'bndescription_3rd',
'bndescription_4th',
'bndescription_5th',
'bnslogan_1',
'bnslogan_2',
'bnstarting_date',
            
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',        ]);
			
			
					 $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
		
		
		$serv->update($input);
  
        return redirect()->route('serv.index')
                        ->with('success',' Updated successfully');
	  
	  
	  
	  
	  
	  
	  
	  
	  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(serv $serv)
    {
        		        $serv->delete();
  
        return redirect()->route('serv.index')
                        ->with('success','Deleted successfully');
    }
}
