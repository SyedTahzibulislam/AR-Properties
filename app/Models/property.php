<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;
	
	
			   protected $fillable = [
'address_line1',
'adress_line2',
'area',
'price',
'image',
 'video',
'map',
'description', 
'latitude',
'longitude',
'maxbnprice',
'searchlocation',

'bnaddress_line1',
'bnadress_line2',
'bnarea',
'bnprice',
'scratch',


'bndescription', 
'image1',
'image2',
'image3',
'image4',
'maxprice',


   ];
}
