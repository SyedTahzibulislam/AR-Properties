<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class aboutcontroller extends Controller
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
        $abo = about::latest()->paginate(5);
  
        return view('about.index',compact('abo'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('about.create');
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

about::create($input);
        
        return redirect()->route('about.index')
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
    public function edit( about $about)
    {
       return view('about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, about $about )
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
    
	
	       $about->update($input);
  
        return redirect()->route('about.index')
                        ->with('success',' updated successfully');
	
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(about $about )
    {
        		        $about->delete();
  
        return redirect()->route('about.index')
                        ->with('success','Deleted successfully');
    }
}
