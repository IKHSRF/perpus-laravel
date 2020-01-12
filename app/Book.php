<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable =[
    	'bukuid','judul','penerbitid','pengarang'
    ];
}
