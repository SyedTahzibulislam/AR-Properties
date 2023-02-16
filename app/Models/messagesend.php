<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messagesend extends Model
{
    use HasFactory;
	  protected $fillable = [
'name',
'body',
'mobile',
'title',

   ];
}
