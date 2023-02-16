<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
	  protected $fillable = [
'mobile',
'email',
'facebook',
'youtube',
'instragram',
'map',
'address',
'whatsappnumber',
'whatsapptext',
'latitude',
'longitude',




   ];
}
