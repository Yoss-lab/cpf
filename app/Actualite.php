<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $fillable = [
        'id','image', 'titre', 'descAct' , 
    ];
}
