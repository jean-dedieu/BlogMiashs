<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model

{
    //préciser les champs dans lequel on peut insérer les données
     protected $fillable = ['name', 'email', 'message'];

   
}
