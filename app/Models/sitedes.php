<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sitedes extends Model
{
	 protected $fillable = [
				   
				   'metanmae',
				   'siteicontitle',
				   'metadescription',
				   'favicon',
				   'appletouchicon',
				   'fristnametite',
				   'lastnametite',
				   
				   ];
    use HasFactory;
}
