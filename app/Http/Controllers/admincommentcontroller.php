<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sendcomment;

class admincommentcontroller extends Controller
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
        $unapprovecomment = sendcomment::where('approve',0)->orderBy('created_at', 'DESC')->get();
		$approvecomment = sendcomment::where('approve',1)->orderBy('created_at', 'DESC')->get();
		
  
        return view('comment.index',compact('unapprovecomment', 'approvecomment'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
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
        $unapprovecomment = sendcomment::where('id',$id)->update(['approve' => 1]);
		return redirect()->back()->with('success','The Comment has been approved');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sendcomment::where('id',$id)->delete();
		return redirect()->back()->with('success','The Comment has been deleted');
    }
}
