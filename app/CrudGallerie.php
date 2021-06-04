<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudGallerie extends Model
{
    protected $fillable = [
        'id','titre','sousTitre','image', 
    ];  
}
