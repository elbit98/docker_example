<?php

use Faker\Generator as Faker;
use Modules\Users\Entities\User;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(User::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'email' => $faker->email,
        'password' => $faker->password,
        'balance' => 100,
        'avatar' => 'img/avatar.png'
    ];
});
