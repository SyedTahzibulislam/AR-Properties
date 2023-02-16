<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;


class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
           'name'     => $row[0],
		   'mobile_number' => $row[1],
		   'address'=> $row[2],
		   
           'email'    => $row[3], 
           'password' => Hash::make($row[4]),
        ]);
    }
}
