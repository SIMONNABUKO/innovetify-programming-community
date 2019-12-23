<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;
use App\Category;
use App\user;

$factory->define(Question::class, function (Faker $faker) {
    $text = $faker->text;
    $string = $faker->sentence;
    return [
        //
        'title'=>$string,
        'body'=>$text,
        'slug'=>Str::slug($string),
        'category_id'=> function(){
            return Category::all()->random();
        },
        'user_id'=> function(){
            return User::all()->random();
        }

    ];
});
