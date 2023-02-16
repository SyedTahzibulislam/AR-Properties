<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;
	protected $fillable = [
	
'service_name',
'description_1st',
'description_2nd',
'description_3rd',
'description_4th',
'description_5th',
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
'image',
	
	
	
	
	];
}
