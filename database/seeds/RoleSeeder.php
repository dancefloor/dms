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
            'slug'  => 'crud_courses',
            'label' => 'The person has the right to view, create, edit and delete courses', 
        ]);
        
        Permission::firstOrCreate([
            'name'  => 'CRUD Users',
            'slug'  => 'crud_users',
            'label' => 'The person has the right to view, create, edit and delete users', 
        ]);

        Permission::firstOrCreate([
            'name'  => 'CRUD Roles',
            'slug'  => 'crud_roles',
            'label' => 'The person has the right to view, create, edit and delete roles', 
        ]);

        Permission::firstOrCreate([
            'name'  => 'CRUD Permissions',
            'slug'  => 'crud_permissions',
            'label' => 'The person has the right to view, create, edit and delete permissions', 
        ]);

        Permission::firstOrCreate([
            'name'  => 'CRUD Styles',
            'slug'  => 'crud_styles',
            'label' => 'The person has the right to view, create, edit and delete styles', 
        ]);

        Permission::firstOrCreate([
            'name'  => 'CRUD Locations',
            'slug'  => 'crud_locations',
            'label' => 'The person has the right to view, create, edit and delete locations', 
        ]);

        Permission::firstOrCreate([
            'name'  => 'CRUD Classrooms',
            'slug'  => 'crud_classrooms',
            'label' => 'The person has the right to view, create, edit and delete classrooms', 
        ]);

        Permission::firstOrCreate([
            'name'  => 'CRUD Payments',
            'slug'  => 'crud_payments',
            'label' => 'The person has the right to view, create, edit and delete payments', 
        ]);

        // List of Roles -------------------
        
        Role::firstOrCreate([
            'name'  => 'Super Admin',
            'slug'  => 'super-admin',
            'label' => 'Administrator of the website, full access, all rigths granted',
        ]);

        Role::firstOrCreate([
            'name'  => 'Admin',
            'slug'  => 'admin',
            'label' => 'The school owner',
        ]);

        Role::firstOrCreate([
            'name'  => 'Manager',
            'slug'  => 'manager',
            'label' => 'School manager',
        ]);

        Role::firstOrCreate([
            'name'  => 'Secretary',
            'slug'  => 'secretary',
            'label' => 'In charge of controlling registrations, courses as well as answering phone calls and emails',
        ]);

        Role::firstOrCreate([
            'name'  => 'Editor',
            'slug'  => 'editor',
            'label' => 'A person who helps the manager with payments and the administration',
        ]);

        Role::firstOrCreate([
            'name'  => 'Instructor',
            'slug'  => 'instructor',
            'label' => 'A person who teaches and manages dance classes',
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
