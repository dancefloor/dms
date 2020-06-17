<?php

use App\Models\Classroom;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classroom::create([ 'name' => 'AJ Studio', 'location_id' => 1 ]);
        Classroom::create([ 'name' => 'Bartdak', 'location_id' => 2 ]);
        Classroom::create([ 'name' => 'CCA', 'location_id' => 3 ]);
        Classroom::create([ 'name' => 'Dance Aera', 'location_id' => 4 ]);
        Classroom::create([ 'name' => 'Diafa | Salle A', 'location_id' => 5 ]);
        Classroom::create([ 'name' => 'Diafa | Salle B', 'location_id' => 5 ]);
        Classroom::create([ 'name' => 'Encore en Corps', 'location_id' => 6 ]);
        Classroom::create([ 'name' => 'Studio Vélodrome', 'location_id' => 7 ]);
        Classroom::create([ 'name' => 'Usine Kugler', 'location_id' => 8 ]);
        Classroom::create([ 'name' => 'Vivre son Corps', 'location_id' => 9 ]);
    }
}
