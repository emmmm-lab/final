<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    $date_time = $faker->dateTimeBetween($startDate = '-90 days', $endDate = '-2 days', $timezone = null);
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'remember_token' => Str::random(10),
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'introduction' => $faker->sentence(),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
