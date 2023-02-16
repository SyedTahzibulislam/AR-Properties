<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slideshow;

class slideshowcontroller extends Controller
{
	
	    public function __construct()
    {
		 $this->middleware(['auth','verified']);
       
          //	   $this->middleware('auth');
    }
     public function index()
    {
        $products = slideshow::latest()->paginate(5);
  
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
			'address_line2',
			'price'=> 'numeric|nullable',
			
			'bnaddress_line1',
			'bnaddress_line2',
			'bnprice',
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
  
        slideshow::create($input);
   
        return redirect()->route('slideshow.index')
                        ->with('success','Created successfully.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(slideshow $slideshow)
    {
        return view('products.show',compact('slideshow'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\slideshow  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(slideshow $slideshow)
    {
       
	 // echo 'this is' . $slideshow->id;
	    return view('products.edit',compact('slideshow'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slideshow $slideshow)
    {
        $request->validate([
            'address_line1' ,
			'address_line2',
			'price'=> 'numeric|nullable',
			'bnaddress_line1',
			'bnaddress_line2',
			'bnprice',
            
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
        
        $slideshow->update($input);
  
        return redirect()->route('slideshow.index')
                        ->with('success','Updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(slideshow $slideshow)
    {
        $slideshow->delete();
  
        return redirect()->route('slideshow.index')
                        ->with('success','Deleted successfully');
    }
}
