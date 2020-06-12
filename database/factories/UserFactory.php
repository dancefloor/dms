<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    $mobile = $faker->e164PhoneNumber;
    $phone = $faker->optional()->e164PhoneNumber;
    
    $firstname = $faker->firstNameMale;
    $picture = 'https://randomuser.me/api/portraits/men/' . rand(1,99) . '.jpg';

    if ($gender === 'female') {
        $firstname = $faker->firstNameFemale;
        $picture = 'https://randomuser.me/api/portraits/women/' . rand(1,99) . '.jpg';
    }

    return [
        'firstname'         => $firstname,
        'lastname'          => $faker->lastName,
        'email'             => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token'    => Str::random(10),
        
        'birthday'      => $faker->optional()->date('Y-m-d'),
        'picture'       => $picture,
        'gender'        => $gender,
        'profession'    => $faker->optional()->jobTitle,
        'biography'     => $faker->paragraph,
        
        'branch'        => $faker->word,
        'how_heard_df'  => $faker->randomElement(['Instagram', 'Facebook','Google','Friend','Old Student']),
        'work_status'   => $faker->randomElement(['Student', 'Working','Unemployed','Retired','Freelance']),         
        
        'mobile'        => $mobile,
        'phone'         => $phone,
        'mobile_verified_at' => now(),
        'phone_verified_at'  => now(),
        
        'street'        => $faker->streetAddress,
        'street_number' => $faker->buildingNumber,
        'address_info'  => $faker->optional()->secondaryAddress,
        'postal_code'   => $faker->postcode,
        'city'          => $faker->city,
        'state'         => $faker->state,
        'country'       => $faker->country,
        'lat'           => $faker->latitude,
        'lng'           => $faker->longitude,

        'facebook'      => $faker->optional()->url,
        'instagram'     => $faker->optional()->url,
        'linkedin'      => $faker->optional()->url,
        'twitter'       => $faker->optional()->url,
        'pinterest'     => $faker->optional()->url,
        'skype'         => $faker->optional()->userName,
        'snapchat'      => $faker->optional()->userName,
        'tiktok'        => $faker->optional()->userName,
        'youtube'       => $faker->optional()->url,

    ];

});