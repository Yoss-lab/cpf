<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nomFormation', 'type', 'descFormation' ,'image', 
    ];
}
