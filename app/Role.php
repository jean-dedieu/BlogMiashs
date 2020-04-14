<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //etablir la relation Role et User

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
