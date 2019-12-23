<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;

class Category extends Model
{
    //Question relationship
    public function questions(){
        return $this->hasMany('App\Question');
    }
}
