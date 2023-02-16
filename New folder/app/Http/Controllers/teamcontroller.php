<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\team; 


class teamcontroller extends Controller
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
      $team = team::latest()->paginate(5);
  
        return view('team.index',compact('team'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		
		return view('team.create');
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

'name',
'bnname',
'mobile',
'email',
'image',
'designation',
'bndesignation',
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',        ]);
			
			
			
			
		  $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
       
	    team::create($input);
        
        return redirect()->route('team.index')
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
    public function edit(team $team)
    {
        return view('team.edit',compact('team'));
    
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team)
    {
                $request->validate([

'name',
'bnname',
'mobile',
'email',
'image',
'designation',
'bndesignation',
            
'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'       ]);
			
			
			
			 $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        $team->update($input);
  
        return redirect()->route('team.index')
                        ->with('success',' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        
		        $team->delete();
  
        return redirect()->route('team.index')
                        ->with('success','Deleted successfully');
    }
}
