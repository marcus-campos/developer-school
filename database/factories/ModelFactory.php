<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Series;
use App\Models\User;
use App\Models\Video;

$factory->define(User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Series::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence,
        'image' => $faker->imageUrl(),
        'objective' => $faker->text(),
        'requirements' => $faker->text(),
        'description' => $faker->text(),
        'user_id' => 1
    ];
});

$factory->define(Video::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence,
        'video' => $faker->imageUrl(),
        'episode' => random_int(0, 10),
        'like' => random_int(0, 1000),
        'series_id' => random_int(0, 50),
    ];
});
