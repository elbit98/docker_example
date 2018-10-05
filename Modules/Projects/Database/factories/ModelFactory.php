<?php

use Faker\Generator as Faker;
use Modules\Projects\Entities\Project;
use Modules\Users\Entities\User;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Project::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'name' => $faker->name
    ];
});

