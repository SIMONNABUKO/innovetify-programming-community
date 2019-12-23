<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reply;
use App\Category;
use App\user;

class Question extends Model
{
    //relationships
    public function replies(){
        return $this->hasMany('App\Reply');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
