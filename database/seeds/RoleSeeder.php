<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate([
            'name'  => 'Admin',
            'slug'  => 'admin',
            'label' => 'Administrator of the website, full access, all rigths granted',
        ]);

        Role::firstOrCreate([
            'name'  => 'Manager',
            'slug'  => 'manager',
            'label' => 'The school manager',
        ]);

        Role::firstOrCreate([
            'name'  => 'Instructor',
            'slug'  => 'instructor',
            'label' => 'A person who teaches and manages dance classes',
        ]);

        Role::firstOrCreate([
            'name'  => 'Admin assistant',
            'slug'  => 'admin-assistant',
            'label' => 'A person who helps the manager verify payments and the administration',
        ]);

        Role::firstOrCreate([
            'name'  => 'Class Assistant',
            'slug'  => 'class-assistant',
            'label' => 'An advanced student that helps with the classes but is does not belongs to the dancefloor team',
        ]);
        
        Role::firstOrCreate([
            'name'  => 'Student',
            'slug'  => 'student',
            'label' => 'Default type of user',
        ]);
    }    
}
