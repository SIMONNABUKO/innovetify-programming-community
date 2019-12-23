<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Like;
use App\Question;
use App\User;

class Reply extends Model
{
    //relationships
    public function likes(){
        return $this->hasMany('App\Like');
    }
    public function question(){
        return $this->belongsTo('App\Question');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
