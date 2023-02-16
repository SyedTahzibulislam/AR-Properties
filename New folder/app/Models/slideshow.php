<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slideshow extends Model
{
    use HasFactory;
	
	
	   protected $fillable = [
'address_line1',
'address_line2',
'image',
'price',
'bnprice',
'bnaddress_line1',
'bnaddress_line2',
    ];
	
}
