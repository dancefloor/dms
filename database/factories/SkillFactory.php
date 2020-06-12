<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Skill;
use Faker\Generator as Faker;

$factory->define(Skill::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'icon' => $faker->word,
        'description' => $faker->text,
        'image' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
