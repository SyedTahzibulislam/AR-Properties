<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\property; 

class propertycontroller extends Controller
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
$pro = property::latest()->paginate(5);
  
        return view('Latest_properties.index',compact('pro'))
            ->with('i', (request()->input('page', 1) - 1) * 10); 
		
		//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('Latest_properties.create');
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

		 'address_line1',
			'adress_line2',
			'area',
           'price',
		   'video',
		   'map',
		   'description',
		   'maxprice',
		   'bnaddress_line1', 
			'bnadress_line2',
			'bnarea',
           'bnprice',
		   'bndescription',
		   'searchlocation',
		   'latitude',
'longitude',
'maxbnprice',
		   
		   'scratch' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
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
		
		

		
		        if ($scratch = $request->file('scratch')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "scarch" . "." . $scratch->getClientOriginalExtension();
            $scratch->move($destinationPath, $profileImage);
            $input['scratch'] = "$profileImage";
        }
       
	    property::create($input);
        
        return redirect()->route('property.index')
                        ->with('success','Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(property $property)
	
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(property $property)
	

    {
        return view('Latest_properties.edit',compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, property $property )
    {
        //
		
		         $request->validate([

		 'address_line1' ,
			'adress_line2',
			'area',
           'price',
		   'video',
		   'map',   
		   'description',
		   'maxprice',
		   'bnaddress_line1', 
			'bnadress_line2',
			'bnarea',
           'bnprice',
		   'bndescription',
		   'latitude',
		   'searchlocation',
'longitude',
'maxbnprice',
		  'scratch' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
            
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  

'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',    

'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',    

'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',    

'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',    






			]);
			
			
		 $input = $request->all();
/*	
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
		
*/


		        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }		
					 

		        if ($image = $request->file('image1')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image1" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image1'] = "$profileImage";
        }else{
            unset($input['image1']);
        }
		
		
		
		        if ($image = $request->file('image2')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image2" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image2'] = "$profileImage";
        }else{
            unset($input['image2']);
        }
		
		
		        if ($image = $request->file('image3')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image3" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image3'] = "$profileImage";
        }else{
            unset($input['image3']);
        }
		
		
		        if ($image = $request->file('image4')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "image4" . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image4'] = "$profileImage";
        }else{
            unset($input['image4']);
        }
		
		
		
		
		
		
		
		
		
		
		
		
		
				        if ($scratch = $request->file('scratch')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "scarch" . "." . $scratch->getClientOriginalExtension();
            $scratch->move($destinationPath, $profileImage);
            $input['scratch'] = "$profileImage";
        }else{
            unset($input['scratch']);
        }
       
		
		
        
        $property->update($input);
  
        return redirect()->route('property.index')
                        ->with('success','Updated successfully');
		
		
		
		
		
		
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(property $property)
    {
        //
		        $property->delete();
  
        return redirect()->route('property.index')
                        ->with('success','Deleted successfully');
		
		
		
    }
}
