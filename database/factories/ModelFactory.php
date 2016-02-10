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

$factory->define(TeachMe\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('123456'),
        'role' => $faker->randomElement(['editor','lector']),
        'remember_token' => str_random(10),
    ];
});

$factory->define(TeachMe\Entities\Ticket::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'status' => $faker->randomElement(['open','closed']),
        'user_id' => rand(1,10)
    ];
});

$factory->define(TeachMe\Entities\TicketVote::class, function (Faker\Generator $faker) {
    return [
        'user_id' => rand(1,10),
        'ticket_id' => rand(1,10)
    ];
});

$factory->define(TeachMe\Entities\TicketComment::class, function (Faker\Generator $faker) {
    return [
        'comment' => $faker->paragraph,
        'link' => $faker->url,
        'user_id' => rand(1,10),
        'ticket_id' => rand(1,10)
    ];
});