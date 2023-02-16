<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sendcomment extends Model
{
    use HasFactory;
		  protected $fillable = [
'name',
'body',
'mobile',
'user_id',
'approve',

   ];
}
