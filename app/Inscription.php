<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'id','nom', 'prenom','cin', 'tel' ,'email','formation', 
    ];
}
