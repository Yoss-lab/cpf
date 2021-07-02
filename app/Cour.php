<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    protected $fillable = [
        'id','nom','pdf', 
    ];
}
