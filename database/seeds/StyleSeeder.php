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
            'music'         => 'Salsa',
            'family'        => 'Line Salsa', 
            // 'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => 'Los Angeles, USA',
            'year'          => '70\'s',
        ]);

        Style::create([
            'name'          => 'Salsa on2', 
            'family'        => 'Line Salsa', 
            // 'description'   => '',
            // 'icon'          => '', 
            // 'image'         => '', 
            'origin'        => 'New York, USA',
            'year'          => '',
        ]);
        
        Style::create([
            'name'          => 'Dancehall', 
            'music'         => 'Reggae, R&B, ska, rocksteady, dub, toasting, dancehall',
            'family'        => 'Urban', 
            'description'   => 'Dancehall is a genre of Jamaican popular music that originated in the late 1970s.[4] Initially, dancehall was a more sparse version of reggae than the roots style, which had dominated much of the 1970s.[5][6] In the mid-1980s, digital instrumentation became more prevalent, changing the sound considerably, with digital dancehall (or "ragga") becoming increasingly characterized by faster rhythms. Key elements of dancehall music include its extensive use of Jamaican Patois rather than Jamaican standard English and a focus on the track instrumentals (or "riddims").',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => 'Jamaica',
            'year'          => 'Late 70\'s',
        ]);

        

        Style::create([
            'name'          => 'Hip-hop', 
            'family'        => 'Urban',
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => 'USA',
            'year'          => '',
        ]);

        // Style::create([
        //     'name'          => 'Lady Styling', 
        //     'description'   => '',
        //     'icon'          => '', 
        //     'image'         => '',
        //     'origin'        => '',
        //     'year'          => '',
        // ]);

        // Style::create([
        //     'name'          => 'Men Styling', 
        //     'description'   => '',
        //     'icon'          => '', 
        //     'image'         => '',
        //     'origin'        => '',
        //     'year'          => '',
        // ]);

        Style::create([
            'name'          => 'Cuban salsa', 
            'music'         => 'Timba, Salsa cubana, Rumba, Afrocuban',
            'family'        => 'Cuban Salsa',
            'description'   => '',
            'icon'          => '', 
            'image'         => '',
            'origin'        => 'Cuba',
            'year'          => '',
        ]);

        Style::create([
            'name'          => 'Rueda de Casino', 
            'music'         => 'Timba, Cuban salsa, Salsa',
            'family'        => 'Cuban Salsa',
            'description'   => '',
            'icon'          => '', 
            'image'         => '',
            'origin'        => 'Havana, Cuba',
            'year'          => '1950\'s',
        ]);

        Style::create([
            'name'          => 'Afro-cuban', 
            'music'         => 'Afro-cuban, Timba, Cuban salsa',
            'family'        => 'Cuban Salsa',
            'description'   => '',
            'icon'          => '', 
            'image'         => '',
            'origin'        => 'Cuba',
            'year'          => '',
        ]);
        
        Style::create([
            'name'          => 'Rumba yambú',
            'music'         => 'Rumba',
            'family'        => 'Cuban salsa',
            'description'   => '',
            'icon'          => '', 
            'image'         => '',
            'origin'        => 'Cuba',
            'year'          => '19th century',
        ]);

        Style::create([
            'name'          => 'Rumba Guaguanco', 
            'music'         => 'Rumba', 
            'family'        => 'Cuban salsa', 
            'description'   =>  '',
            'icon'          =>  '', 
            'image'         =>  '', 
            'origin'        =>  'Cuba',
            'year'          =>  '19th century',
        ]);

        Style::create([
            'name'          => 'Rumba Columbia', 
            'music'         => 'Rumba, Timba, Cuban Salsa', 
            'family'        => 'Cuban salsa', 
            'description'   =>  '',
            'icon'          =>  '', 
            'image'         =>  '', 
            'origin'        =>  'Cuba',
            'year'          =>  '19th century',
        ]);

        Style::create([
            'name'          => 'Afro-beats', 
            'music'         => 'Coupé Decalé, afrohouse, afrogroove',
            'family'        => 'Urban', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year'          => '',
        ]);

        Style::create([
            'name'          => 'House',
            'music'         => 'House',
            'family'        => 'Urban', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year'          => '',
        ]);

        Style::create([
            'name'          => 'Streching', 
            'family'        => 'Sport', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year'          => '',
        ]);

        Style::create([
            'name'          => 'Salsa fusion', 
            'family'        => 'Fusion', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year'          => '',
        ]);

        Style::create([
            'name'          => 'Son Cubano', 
            'family'        => 'Cuban Salsa', 
            'description'   => '',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => '',
            'year'          => ''
        ]);

        Style::create([
            'name'          => 'Boogaloo', 
            'music'         => 'Funk, Soul, Salsa',
            'family'        => 'Line Salsa', 
            'description'   => 'Boogaloo is a freestyle, improvisational street dance movement of soulful steps and robotic movements which make up the foundations of popping dance and turfing; boogaloo can incorporate illusions, restriction of muscles, stops, robot and/or wiggling. The style also incorporates foundational popping techniques, which were initially referred to as "Posing Hard".It is related to the later electric boogaloo dance.',
            'icon'          => '', 
            'image'         => '', 
            'origin'        => 'Chicago, USA',
            'year'          => '1965 and 1966',
        ]);

    }
}

