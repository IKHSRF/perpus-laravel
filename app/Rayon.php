<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    protected $fillable = [
        'rayonid', 'rayon'
    ];
    protected $table = 'rayons';
}
