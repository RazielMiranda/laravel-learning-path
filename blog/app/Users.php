<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    // function myCompany()
    // {
    //     return $this->hasOne('App\Companies','id_users','id');
    // }

    function myCompany()
    {
        return $this->hasMany('App\Companies','id_users','id');
    }
}
