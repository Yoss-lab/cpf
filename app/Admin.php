<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PhpParser\Node\Expr\AssignOp\Mod;
class Admin extends Authenticatable
{
    protected $fillable = [
        'name','prenom','genre','type','dat_naiss','cin','tel', 'email','user_name', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected  $guard  ="admin";
}
