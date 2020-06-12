<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Registration;
use Faker\Generator as Faker;

$factory->define(Registration::class, function (Faker $faker) {

    return [
        'user_id' => $faker->word,
        'course_id' => $faker->word,
        'payment_id' => $faker->word,
        'status' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
