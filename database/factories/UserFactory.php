<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        // 'name' => $faker->name,
        // 'birthday'=>$faker->date,
        // 'phone'=>$faker->randomDigit,
        // 'email'=>$faker->email,
        'name' => 'member',
        'birthday'=>'1970-10-02',
        'phone'=>'0965471392',
        'email'=>'member@gmail.com',
        'password'=>bcrypt('admin'),
        'role'=>'1',
        'is_active'=>'1',
    ];
});
