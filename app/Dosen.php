<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = [
        'id','nip', 'nama', 'gender', 'no_hp', 'email'
    ];
}
