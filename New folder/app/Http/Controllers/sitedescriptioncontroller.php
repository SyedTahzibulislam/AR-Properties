<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sitedes;

class sitedescriptioncontroller extends Controller
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
		        $site = sitedes::latest()->paginate(5);
  
        return view('sitedescription.index',compact('site'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
		
		
		

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('sitedescription.create');
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

						   'metanmae',
				   'siteicontitle',
				   'metadescription',
				   
				   
				   'fristnametite',
				   'lastnametite',
		   
'favicon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
            'appletouchicon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',        ]);
			
			
			
			
		  $input = $request->all();

        if ($image = $request->file('favicon')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['favicon'] = "$profileImage";
        }
		
		        if ($scratch = $request->file('appletouchicon')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "apple-touch-icon" . "." . $scratch->getClientOriginalExtension();
            $scratch->move($destinationPath, $profileImage);
            $input['appletouchicon'] = "$profileImage";
        }
       
	    sitedes::create($input);
        
        return redirect()->route('sitedescription.index')
                        ->with('success',' created successfully.');
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
    public function edit( $sitedes)
    {
	$sit=	sitedes::where('id', $sitedes)->get();
	//dd($sit);
	
             //echo $sitedes;
			  return view('sitedescription.edit',compact('sit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sitedes)
    {
         $request->validate([

						   'metanmae',
				   'siteicontitle',
				   'metadescription',
				   
				   
				   'fristnametite',
				   'lastnametite',
		   
'favicon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
            'appletouchicon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',        ]);
			
			 $input = $request->all();

        if ($image = $request->file('favicon')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['favicon'] = "$profileImage";
        }else{
            unset($input['favicone']);
        }
		
		        if ($scratch = $request->file('appletouchicon')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "apple-touch-icon" . "." . $scratch->getClientOriginalExtension();
            $scratch->move($destinationPath, $profileImage);
            $input['appletouchicon'] = "$profileImage";
        }else{
            unset($input['appletouchicon']);
        }
			$sitedes =sitedes::findOrFail($sitedes); 
			
			 $sitedes->update($input);
  
        return redirect()->route('sitedescription.index')
                        ->with('success','Updated successfully');
			
			
			
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(sitedes $sitedes)
    {
           $sitedescription->delete();
  
        return redirect()->route('sitedescription.index')
                        ->with('success','Deleted successfully');
    }
}
