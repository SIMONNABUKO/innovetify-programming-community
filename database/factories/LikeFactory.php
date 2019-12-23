<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Like;
use Faker\Generator as Faker;
use App\User;
use App\Reply;

$factory->define(Like::class, function (Faker $faker) {
    return [
        //
        'user_id'=> function(){
            return User::all()->random();
        },
        'reply_id'=> function(){
            return Reply::all()->random();
        }
    ];
});
