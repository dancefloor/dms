<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::firstOrCreate([
            'name'  => 'CRUD Courses',
            'slug'  => 'crud-courses',
            'label' => 'The person has the right to view, create, edit and delete courses', 
        ]);
        
        Permission::firstOrCreate([
            'name'  => 'CRUD Users',
            'slug'  => 'crud-users',
            'label' => 'The person has the right to view, create, edit and delete users', 
        ]);

        Permission::firstOrCreate([
            'name'  => 'CRUD Roles',
            'slug'  => 'crud-roles',
            'label' => 'The person has the right to view, create, edit and delete roles', 
        ]);

        Permission::firstOrCreate([
            'name'  => 'CRUD Permissions',
            'slug'  => 'crud-permissions',
            'label' => 'The person has the right to view, create, edit and delete permissions', 
        ]);

        Permission::firstOrCreate([
            'name'  => 'CRUD Styles',
            'slug'  => 'crud-styles',
            'label' => 'The person has the right to view, create, edit and delete styles', 
        ]);

        Permission::firstOrCreate([
            'name'  => 'CRUD Locations',
            'slug'  => 'crud-locations',
            'label' => 'The person has the right to view, create, edit and delete locations', 
        ]);

        Permission::firstOrCreate([
            'name'  => 'CRUD Classrooms',
            'slug'  => 'crud-classrooms',
            'label' => 'The person has the right to view, create, edit and delete classrooms', 
        ]);

        Permission::firstOrCreate([
            'name'  => 'CRUD Payments',
            'slug'  => 'crud-payments',
            'label' => 'The person has the right to view, create, edit and delete payments', 
        ]);

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
