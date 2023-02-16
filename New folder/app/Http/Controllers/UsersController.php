<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
     public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
	
	 public function import(Request $request) 
    {
		$file= $request->file('file');
        Excel::import(new UsersImport, $file);
        
        return redirect('/CRUD')->with('success', 'Data Imported');
    }
}
