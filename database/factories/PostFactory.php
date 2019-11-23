<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->name,
        'content'=>$faker->realText,
        'category_id'=>$faker->randomDigit,
        'user_id'=>$faker->randomDigit,
    ];
});
