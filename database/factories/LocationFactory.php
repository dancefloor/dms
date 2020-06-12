<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'address' => $faker->word,
        'address_info' => $faker->word,
        'postal_code' => $faker->word,
        'city' => $faker->word,
        'state' => $faker->word,
        'country' => $faker->word,
        'm2' => $faker->word,
        'capacity' => $faker->randomDigitNotNull,
        'limit_couples' => $faker->randomDigitNotNull,
        'price_hour' => $faker->word,
        'price_month' => $faker->word,
        'dance_shoes' => $faker->word,
        'comments' => $faker->text,
        'contact' => $faker->word,
        'email' => $faker->word,
        'phone' => $faker->word,
        'contract' => $faker->text,
        'video' => $faker->word,
        'public' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
