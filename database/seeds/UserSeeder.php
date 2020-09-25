<?php
// tutorial https://stackoverflow.com/questions/45269146/laravel-seeding-many-to-many-relationship
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Database\Capsule\Manager;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $heardOf = ['instagram', 'facebook', 'google', 'friend', 'old-student', 'party', 'festival', 'public-manifestation', 'instructor'];
        
        $json = file_get_contents(database_path('data/d.json'));

        $data = json_decode($json);
        foreach ($data as $key => $user) {
            User::create([
                'firstname'     => $user->firstname,
                'lastname'      => $user->lastname,
                'email'         => $user->email,
                'password'      => Hash::make('password'),
                'mobile'        => $user->mobile,
                'gender'        => $user->gender,
                'aware_of_df'   => $heardOf[array_rand($heardOf)]
            ]);
        }

        //factory(App\User::class, 50)->create();
        // Populate the pivot table
        User::all()->each(function ($user) {
            $user->roles()->attach(6);
        });

    }
}


// 1 Admin
// 2 Manager
// 3 Teacher
// 4 Admin assitant 
// 5 class Assistant
// 6 Student
