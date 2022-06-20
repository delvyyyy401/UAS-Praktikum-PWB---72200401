<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $fillable = [
        'id','kode', 'namaMk', 'sks', 'harga', 'namaDosen'
    ];
}
