<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallerie extends Model
{
    
    protected $fillable = [
        'id','titre','sousTitre','image', 
    ];
}
