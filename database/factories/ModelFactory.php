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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'username'       => $faker->username,
        'name'           => $faker->name,
        'email'          => $faker->safeEmail,
        'password'       => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Game::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'short_name' => $faker->word,
        'slug' => str_replace(' ', '-', $faker->name),
        'logo' => '',
        'banner' => ''
    ];
});

$factory->define(App\Models\Platform::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'short_name' => $faker->word,
        'slug' => str_replace(' ', '-', $faker->name),
        'logo' => '',
        'banner' => ''
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'slug' => str_replace(' ', '-', $faker->name),
        'content' => $faker->text($maxNbvChars=500),
        'excerpt' => $faker->paragraph,
        'status' => 'published',
        'user_id' => 1
    ];
});

$factory->define(App\Models\Team::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_replace(' ', '-', $faker->name),
        'description' => $faker->paragraph,
        'team_information' => $faker->text($maxNbvChars=500),
        'owner_id' => 1
    ];
});
