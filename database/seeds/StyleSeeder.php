<?php

use Illuminate\Database\Seeder;
use App\Models\Style;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Style::create([
            'name' => 'Salsa on1', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Salsa on2', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);
        
        Style::create([
            'name' => 'Dancehall','description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Hip-hop', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Lady Styling', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Men Styling', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Salsa cubana', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Rueda de Casino', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Rumba', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Afro-cubano', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Timba', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Rumba', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Afro-beats', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'House', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Streching', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Salsa fusion', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Son Cubano', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

        Style::create([
            'name' => 'Boogaloo', 'description'=>'','icon'=>'', 'image'=>'', 'origin'=>'','year_of_origin'=>''
        ]);

    }
}
