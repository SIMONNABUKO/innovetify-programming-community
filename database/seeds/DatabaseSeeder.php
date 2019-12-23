<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\FactoryBuilder;
use App\User;
use App\Category;
use App\Reply;
use App\Like;
use App\Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(User::class, 10)->create();
        factory(Category::class, 5)->create();
        factory(Question::class, 10)->create();
        factory(Reply::class, 50)->create()->each(function($reply){
            return $reply->likes()->save(factory(Like::class)->make());
        });

    }
}
