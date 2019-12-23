<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reply;

class Like extends Model
{
    //relationships
    public function reply(){
        return $this->belongsTo('App\Reply');
    }
}
