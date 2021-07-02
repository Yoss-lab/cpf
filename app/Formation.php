<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    
    protected $fillable = [
        'id','nomFormation', 'type','categorie','prix', 'descFormation' ,'module1','module2','module3','image', 
    ];
}
