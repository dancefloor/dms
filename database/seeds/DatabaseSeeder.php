<?php

use App\Classroom;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            StyleSeeder::class,
            LocationSeeder::class,
            ClassroomSeeder::class,
            //CourseSeeder::class,
            ]
        );
    }
}
