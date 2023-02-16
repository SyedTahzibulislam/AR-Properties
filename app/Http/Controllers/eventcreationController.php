<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\eventcration; 


class eventcreationController extends Controller
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
$eventcration = eventcration::latest()->get();
  
        return view('event.index',compact('eventcration'));
           
		
		//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('event.create');
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

		 'title',   

		   'description',
	
		   
		  
            
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',       
'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',    

'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',    

'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',    

'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',    



			]);
			
			
			
			
		  $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
		
		
		        if ($image = $request->file('image1')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image1" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image1'] = "$profileImage";
        }
		
		
		
		        if ($image = $request->file('image2')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image2" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image2'] = "$profileImage";
        }
		
		
		        if ($image = $request->file('image3')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image3" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image3'] = "$profileImage";
        }
		
		
		        if ($image = $request->file('image4')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image4" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image4'] = "$profileImage";
        }
		
		

		

       
	    eventcration::create($input);
        
        return redirect()->route('eventcreate.index')
                        ->with('success','Created successfully.');
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
		$eventcration = eventcration::findOrFail($id);
        return view('event.edit',compact('eventcration'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function update(Request $request, eventcration $eventcration  )
    {
        
		
		         $request->validate([

		 'title',   

		   'description',
	
		   
		  
            
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',       
'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',    

'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',    

'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',    

'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 





			]);
			
			
		 $input = $request->all();


		        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image1 = "$profileImage";
        }else{
            unset($image1);
        }		
					 

		        if ($image = $request->file('image1')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image1" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image2 = "$profileImage";
        }else{
            unset($image2);
        }
		
		
		
		        if ($image = $request->file('image2')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image2" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image3 = "$profileImage";
        }else{
            unset($image3);
        }
		
		
		        if ($image = $request->file('image3')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image3" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image4 = "$profileImage";
        }else{
            unset($image4);
        }
		
		
		        if ($image = $request->file('image4')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image4" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image5 = "$profileImage";
        }else{
            unset($image5);
        }
		
		
		
		
		
		
	if ($request->file('image')	)
		
		{
			
					
		   eventcration::where('id', $request->hidden)
  ->update([
 
  'image' => $image1,

  ]); 
			
		}
		
		

	if ($request->file('image1')	)
		
		{
			
					
		   eventcration::where('id', $request->hidden)
  ->update([
 
  'image1' => $image2,

  ]); 
			
		}


	if ($request->file('image2')	)
		
		{
			
					
		   eventcration::where('id', $request->hidden)
  ->update([
 
  'image2' => $image3,

  ]); 
			
		}




	if ($request->file('image3')	)
		
		{
			
					
		   eventcration::where('id', $request->hidden)
  ->update([
 
  'image3' => $image4,

  ]); 
			
		}



	if ($request->file('image4')	)
		
		{
			
					
		   eventcration::where('id', $request->hidden)
  ->update([
 
  'image4' => $image5,

  ]); 
			
		}



		
	
       
		
		
        
       // $eventcration->update($input);
		
		
		   eventcration::where('id', $request->hidden)
  ->update([
  
 'title' => $request->title,
 
  'description' => $request->description,

  ]); 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
  
        return redirect()->route('eventcreate.index')
                        ->with('success','Updated successfully');
		
		
		
		
		
		
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		
		$eventcration = eventcration::findOrFail($id);
       		        $eventcration->delete();
  
        return redirect()->route('eventcreate.index')
                        ->with('success','Deleted successfully');
    }
}
