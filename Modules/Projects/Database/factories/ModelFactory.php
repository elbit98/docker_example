<?php

use Faker\Generator as Faker;
use Modules\Projects\Entities\Project;
use Modules\Projects\Entities\Task;
use Modules\Users\Entities\User;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Project::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'name' => $faker->name
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Task::class, function (Faker $faker) {
    return [
        'project_id' => Project::inRandomOrder()->first()->id,
        'title' => $faker->name,
        'description' => $faker->name,
        'status' => mt_rand(1,3),
        'urgency' => mt_rand(1,3),
        'started_at' => $faker->dateTimeThisMonth()->format('Y-m-d'),
        'ended_at' => $faker->dateTimeThisMonth()->format('Y-m-d')
    ];
});
