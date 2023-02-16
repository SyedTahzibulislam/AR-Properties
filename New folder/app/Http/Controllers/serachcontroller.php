<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property; 

class serachcontroller extends Controller
{
    public function index( Request $request){
		
		 $request->validate([


          
			'city'=> ['nullable','string'],
			'area'=> ['nullable','string'],
			'price'=> ['nullable','string'],
			
		   
		          ]);   
				  
				  
				   
				  if  ((!empty($request->city)) && (empty($request->area)) && (empty($request->price)))
				  
				  {
					  $prop = property::where('adress_line2', $request->city)->get();
					   
				
					   return view('BICTSOFT.propertysearch',compact('prop' ));
					  
				  }				 
				  if  ((empty($request->city)) && (!empty($request->area)) && (empty($request->price)))
				  
				  {
					  $prop = property::where('area', $request->area)->get();
					   
				
					   return view('BICTSOFT.propertysearch',compact('prop' ));
					  
				  }				 
				  
				  /////////price 
				  if  ((empty($request->city)) && (empty($request->area)) && (!empty($request->price)))
				  
				  {
					  echo  $price = (int)$request->price;
					 

                    	if ($price == 3500000 )
					  {
					  $prop = property::where ('price', '>', $price)  ->get();
					   
				
					  return view('BICTSOFT.propertysearch',compact('prop' ));
						 
						 
					  }
					  else {
					  
					  
					  $prop = property::where ('price', '>', $price)->where ('price', '<=', $price+500000)    ->get();
					   
				
					  return view('BICTSOFT.propertysearch',compact('prop' ));
					  }  



				  
				  }				 
				  
				  
				  
				  if  (!(empty($request->city)) && (!empty($request->area)) && (empty($request->price)))
				  
				  {    
				  $prop = property::where('adress_line2', $request->city)->where('area', $request->area) ->get();
					   
				
					   return view('BICTSOFT.propertysearch',compact('prop' ));
					  
					  
				  }				  
				 
				 /////////////// price 
				 if  ((empty($request->city)) && (!empty($request->area)) && (!empty($request->price)))
				  
				  {
					  $price = (int)$request->price;
					  if ($price==3500000)
					  {
					   $prop = property::where ('price', '>', $price)->where('area', $request->area) ->get();
					   
				
					   return view('BICTSOFT.propertysearch',compact('prop' )); 
						  
						  
					  }
					  else{
					  
					  
					   $prop = property::where ('price', '>', $price)-> where ('price', '<=', $price+500000)->where('area', $request->area) ->get();
					   
				
					   return view('BICTSOFT.propertysearch',compact('prop' ));
					  }
					  
				  }				  
				 

				
				if  (!(empty($request->city)) && (empty($request->area)) && (!empty($request->price)))
				  
				  {
					  
					  $price = (int)$request->price;
					  if ($price==3500000)
					  {
					   $prop = property::where ('price', '>', $price)->where('adress_line2', $request->city) ->get();
					   
				
					   return view('BICTSOFT.propertysearch',compact('prop' )); 
						  
						  
					  }
					  else{
					  
					  
					   $prop = property::where ('price', '>', $price)-> where ('price', '<=', $price+500000)->where('adress_line2', $request->city) ->get();
					   
				
					   return view('BICTSOFT.propertysearch',compact('prop' ));
					  } 

					  
				  }				 
				 

				 if  (!(empty($request->city)) && (!empty($request->area)) && (!empty($request->price)))
				  
				  {
					  $price = (int)$request->price;
					  
					  if($price == 3500000)
					  {
						 $prop = property::where('adress_line2', $request->city)->where('area', $request->area)->where('price', '>', $price ) ->get();

					   return view('BICTSOFT.propertysearch',compact('prop' )); 

					  }
					  else {
					   $prop = property::where('adress_line2', $request->city)->where('area', $request->area)->where('price', '>', $price )->where('price', '<=', $price+500000 ) ->get();
					   
				
					   return view('BICTSOFT.propertysearch',compact('prop' ));
					  }
					  
				  }				  
				   
				   
				   
				   if  ((empty($request->city)) && (empty($request->area)) && (empty($request->price)))
				  
				  {
					  $prop = property::all();
					  return view('BICTSOFT.propertysearch',compact('prop' ));
					  
				  }	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	}
}
