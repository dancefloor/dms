<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'promo_video' => $faker->word,
        'start_date' => $faker->word,
        'start_time' => $faker->word,
        'end_date' => $faker->word,
        'end_time' => $faker->word,
        'level' => $faker->word,
        'full_price' => $faker->word,
        'reduced_price' => $faker->word,
        'promo_price' => $faker->word,
        'color' => $faker->word,
        'cover_image' => $faker->word,
        'icon' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
