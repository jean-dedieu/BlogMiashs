<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //pour accepter les valeur qui entrent dans la base de données

    protected $guarded =[];

    public function user(){
        return $this->belongsTo(App\User::Class);
    }

    public function post(){
        return $this->belongsTo(App\Post::Class);
    }
}
