<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nis', 'nama', 'rayon','rombel'
    ];
    protected $table = 'siswas';
}
