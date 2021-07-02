<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable = [
        'sujet','numR','description','heure','lien','id','codeSecret','image','pdf', 
    ];
}
