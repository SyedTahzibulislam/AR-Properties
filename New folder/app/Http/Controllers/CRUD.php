<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class CRUD extends Controller
{
	
	    public function __construct()
    {
		 $this->middleware(['auth','verified']);
       
          
    }
	
			  public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }  
	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::all();
  
        return view('users.index',compact('users'));
		
		
		//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
		
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

  
   $this->validate( request(),[
            'name' => 'required| string| max:255',
            'email' => 'required| string| email| max:255| unique:users',
            'password' => 'required| string| min:8| confirmed',
			'address'=>'required| string| max:255',
			'mobile_number'=>'required|regex:/^(0)[0-9]{5,10}$/',
			
        ]);
		
		  
		  
		  $user = new user;
		  $user->name = request('name');
		  $user->email= request('email');
		  
		 $user->password= Hash::make(request('password'));
		  $user->mobile_number =request('mobile_number');
		  $user->address =request('address');
		  $user->save(); 
		  


/** $data= $request->validate( [
            'name' => 'required| string| max:255',
            'email' => 'required| string| email| max:255| unique:users',
            'password' => 'required| string| min:8| confirmed',
			'address'=>'required| string| max:255',
			'mobile_number'=>'required|regex:/^(0)[0-9]{5,10}$/',
			
        ]);
		   if($data->fails()) {
      return Redirect::back()->withErrors($data);
		

		
     



          $user = new user;
		  $user->name = $request->name;
		  $user->email= $request->email;
		  
		 $user->password= Hash::make($request->password);
		  $user->mobile_number =$request->mobile_number;
		  $user->address =$request->address;
		  $user->save();   **/
		
		
  
       
   
        return redirect()->route('CRUD.index')
                        ->with('success','Blog created successfully.');
		
		
		//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
	 
	 ---------------------------------------------------------- for the learning purpose update -------------------------------------------
    
    public function edit($id)
    {
		
       $user=user::find($id);
	   
	    return view('users.edit',compact('user'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function update(Request $request, $id)
    {
		
	
		
	   $this->validate( request(),[
            'name' => 'required| string| max:255',
            'email' => 'required| string| email| max:255| unique:users',
            'password' => 'required| string| min:8| confirmed',
			'address'=>'required| string| max:255',
			'mobile_number'=>'required|regex:/^(0)[0-9]{5,10}$/',
			
        ]);
		  
		

		



		
		user::where('id', $id)
      ->update(['name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
			'mobile_number'=>$data['mobile_number'],
			'address'=>$data['address'],
			]);
		
		
	 return redirect()->route('CRUD.index')
                        ->with('success','Blog updated successfully');
		
		
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
		$user=user::find($id);
        $user->delete();
  
        return redirect()->route('CRUD.index')
                        ->with('success','Blogs deleted successfully');
    }
}
