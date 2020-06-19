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
            'name'          => 'Salsa on1', 
            'genre'         => 'Line Salsa', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => 'USA',
            'year_of_origin'=> '70\'s',
        ]);

        Style::create([
            'name'          => 'Salsa on2', 
            'genre'         => 'Line Salsa', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year_of_origin'=> '',
        ]);
        
        Style::create([
            'name'          => 'Dancehall', 
            'genre'         => 'Urban', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year_of_origin'=> '',
        ]);

        Style::create([
            'name'          => 'Hip-hop', 
            'genre'         => 'Urban',
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year_of_origin'=> '',
        ]);

        Style::create([
            'name'          => 'Lady Styling', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '',
            'origin'        => '',
            'year_of_origin'=> '',
        ]);

        Style::create([
            'name'          => 'Men Styling', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '',
            'origin'        => '',
            'year_of_origin'=> '',
        ]);

        Style::create([
            'name'          => 'Salsa cubana', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '',
            'origin'        => '',
            'year_of_origin'=> '',
        ]);

        Style::create([
            'name' => 'Rueda de Casino', 
            'description'=>''
            ,'icon'=>'', 'image'=>'',
            'origin'=>'',
            'year_of_origin'=>'',
        ]);

        Style::create([
            'name' => 'Rumba',
            'description'=>''
            ,'icon'=>'', 'image'=>'',
            'origin'=>'',
            'year_of_origin'=>'',
        ]);

        Style::create([
            'name' => 'Afro-cubano', 
            'description'=>''
            ,'icon'=>'', 'image'=>'',
            'origin'=>'',
            'year_of_origin'=>'',
        ]);

        Style::create([
            'name' => 'Timba', 
            'description'=>''
            ,'icon'=>'', 'image'=>'',
            'origin'=>'',
            'year_of_origin'=>'',
        ]);

        Style::create([
            'name'          => 'Rumba guaguanco', 
            'genre'         => 'Rumba', 
            'description'   =>  '',
            'icon'          =>  '', 
            'image'         =>  '', 
            'origin'        =>  '',
            'year_of_origin'=>  '',
        ]);

        Style::create([
            'name'          => 'Afro-beats', 
            'genre'         => 'Urban', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year_of_origin'=> '',
        ]);

        Style::create([
            'name'          => 'House', 
            'genre'         => 'Urban', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year_of_origin'=> '',
        ]);

        Style::create([
            'name'          => 'Streching', 
            'genre'         => 'Sport', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year_of_origin'=> '',
        ]);

        Style::create([
            'name'          => 'Salsa fusion', 
            'genre'         => 'Fusion', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year_of_origin'=> '',
        ]);

        Style::create([
            'name'          => 'Son Cubano', 
            'genre'         => 'Son', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year_of_origin'=> ''
        ]);

        Style::create([
            'name'          => 'Boogaloo', 
            'genre'         => 'Line Salsa', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year_of_origin'=> '',
        ]);

    }
}
