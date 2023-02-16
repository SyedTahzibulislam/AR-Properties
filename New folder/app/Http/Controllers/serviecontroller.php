<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class serviecontroller extends Controller
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
        $serv = service::latest()->paginate(5);
  
        return view('service.index',compact('serv'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
		
		'service_name',
		'description_1st',
		'description_2nd','description_3rd','description_4th','description_5th','slogan_1','slogan_2','starting_date',

		
		'bnservice_name',
'bndescription_1st',
'bndescription_2nd',
'bndescription_3rd',
'bndescription_4th',
'bndescription_5th',
'bnslogan_1',
'bnslogan_2',
'bnstarting_date',

'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            
        ]);
		


        $input = $request->all();
		
				
		        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

  
        service::create($input);
   
        return redirect()->route('service.index')
                        ->with('success','Product created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        return view('service.show',compact('service'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit( service $service)
    {



	  return view('service.edit',compact('service'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        $request->validate([
           
	
		'service_name',
		'description_1st',
		'description_2nd','description_3rd','description_4th','description_5th',
		
				'slogan_1',
'slogan_2',
'starting_date',
		
		'bnservice_name',
'bndescription_1st',
'bndescription_2nd',
'bndescription_3rd',
'bndescription_4th',
'bndescription_5th',
'bnslogan_1',
'bnslogan_2',
'bnstarting_date',

'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',
       

	   ]);

        $input = $request->all();
		
		
		  if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

       
        
        $service->update($input);
  
        return redirect()->route('service.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
        $service->delete();
  
        return redirect()->route('service.index')
                        ->with('success','Product deleted successfully');
    }
}
