<?php

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c1 = Course::create([
            'name' => 'Lady Styling Cubaine',
            'slug' => 'lady-styling-cubaine',
            'monday' => 1, 'level' => 'beginner',
            'start_time_mon' => '18:30', 'end_time_mon' => '19:30',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c1->students()->attach(1);
        $c1->teachers()->attach(6);
        $c1->styles()->attach(5);
        //Diafa | Salle B

        $c2 = Course::create([
            'name' => 'Salsa Porto on1',
            'slug' => 'salsa-porto-on1',
            'monday'=> 1, 'level' => 'Intermediate',
            'start_time_mon' => '18:45', 'end_time_mon' => '19:45',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c2->teachers()->attach([2,3]); //Corinne & Fred
        $c2->styles()->attach(1);
        //CCA

        $c3 = Course::create([
            'name' => 'Salsa cubaine',
            'slug' => 'salsa-cubaine',
            'monday'=> 1, 'level' => 'Intermediate',
            'start_time_mon' => '18:45:00', 'end_time_mon' => '19:45:00',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c3->teachers()->attach([8,10]); // Sabrina & Vivien
        $c3->styles()->attach(7);
        // Usine Kugler

        $c4 = Course::create([
            'name' => 'Lady Styling Body Movement & Isolation',
            'slug' => 'lady-styling-body-movement-isolation',
            'monday'=> 1, 'level' => 'Intermediate',
            'start_time_mon' => '19:00', 'end_time_mon' => '20:30',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 180, 'reduced_price' => 160,
            'status'=> 'active',
        ]);
        $c4->teachers()->attach(9); //Sonia
        $c4->styles()->attach(7);
        //Diafa | Salle A

        $c5 = Course::create([
            'name' => 'Afrohouse/Afrobeat',
            'slug' => 'afrohouse-afrobeat',
            'monday'=> 1, 'level' => 'All levels',
            'start_time_mon' => '19:30', 'end_time_mon' => '20:45',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 170, 'reduced_price' => 150,
            'status'=> 'active',
        ]);
        $c5->teachers()->attach(14); //Ivan
        $c5->styles()->attach(13);
        //Diafa | Salle B

        $c6 = Course::create([
            'name' => 'Salsa Cubaine',
            'slug' => 'salsa-cubaine',
            'monday'=> 1, 'level' => 'Intermediate',
            'start_time_mon' => '19:50', 'end_time_mon' => '20:50',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c6->teachers()->attach([8,10]); // Sabrina & Vivien
        $c6->styles()->attach(7);
        // Usine Kugler

        $c7 = Course::create([
            'name' => 'Salsa Porto On1',
            'slug' => 'salsa-porto-on1',
            'monday'=> 1, 'level' => 'Advanced', 'level_number' => '2',
            'start_time_mon' => '19:55', 'end_time_mon' => '20:55',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c7->teachers()->attach([2,3]); // Corinne & Fred
        $c7->styles()->attach(1);
        // CCA

        $c8 = Course::create([
            'name' => 'House Dance',
            'slug' => 'house-dance',
            'monday'=> 1, 'level' => 'All levels',
            'start_time_mon' => '20:45', 'end_time_mon' => '22:00',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 170, 'reduced_price' => 150,
            'status'=> 'active',
        ]);
        $c8->teachers()->attach(6); //Laëtycia
        $c8->styles()->attach(14);
        // Diafa | Salle B

        $c9 = Course::create([
            'name' => 'Cubaine Choré Avancé',
            'slug' => 'cubaine-chore-avance',
            'monday'=> 1, 'level' => 'Master',
            'start_time_mon' => '20:45', 'end_time_mon' => '22:00',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 170, 'reduced_price' => 150,
            'status'=> 'active',
        ]);
        $c9->teachers()->attach([9,5]); // Sonia & Kouamé
        $c9->styles()->attach(7);

        // Diafa | Salle A

        $c10 = Course::create([
            'name' => 'Salsa Porto on2',
            'slug' => 'salsa-porto-on2',
            'monday'=> 1, 'level' => 'Intermediate',
            'start_time_mon' => '20:55', 'end_time_mon' => '21:55',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c10->teachers()->attach([2,3]); // Corinne & Fred
        $c10->styles()->attach(2);
        // CCA

        $c11 = Course::create([
            'name' => 'Pasitos con todo',
            'slug' => 'pasitos-con-todo',
            'monday'=> 1, 'level' => 'Intermediate',
            'start_time_mon' => '20:55', 'end_time_mon' => '21:55',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c11->teachers()->attach([8,10]); // Sabrina & Vivien
        $c11->styles()->attach(7);
        // Usine Kugler

        // Mardi ///////////
        $c12 = Course::create([
            'name' => 'Afrohouse Afrobeat',
            'slug' => 'afrohouse',
            'tuesday'=> 1, 'level' => 'All levels',
            'start_time_tue' => '18:45', 'end_time_tue' => '20:15',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 200, 'reduced_price' => 180,
            'status'=> 'active',
        ]);
        $c12->teachers()->attach(14); // Ivan
        $c12->styles()->attach(13);
        // CCA

        $c13 = Course::create([
            'name' => 'Footwork / Shines',
            'slug' => 'footwork-shines',
            'tuesday'=> 1, 'level' => 'Inter',
            'start_time_tue' => '19:00', 'end_time_tue' => '20:00',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c13->teachers()->attach(7); // Mona
        $c13->styles()->attach(2);
        // Encore en Corps

        $c14 = Course::create([
            'name' => 'Hip Hop',
            'slug' => 'hip-hop',
            'tuesday'=> 1, 'level' => 'Beginner',
            'start_time_tue' => '20:20', 'end_time_tue' => '21:50',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 200, 'reduced_price' => 180,
            'status'=> 'active',
        ]);
        $c14->teachers()->attach(14);// Ivan
        $c14->styles()->attach(4);
        // CCA

        $c15 = Course::create([
            'name' => 'Salsa Porto',
            'slug' => 'salsa-porto',
            'tuesday'=> 1, 'level' => 'Beginner',
            'start_time_tue' => '20:30', 'end_time_tue' => '21:30',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c15->teachers()->attach(7);// Mona
        $c15->styles()->attach(1);
        // Usine Kugler


        // Mercredi ///////////////////
        $c16 = Course::create([
            'name' => 'Salsa Fusion (Dancefloor style)',
            'slug' => 'salsa-fusion',
            'wednesday'=> 1, 'level' => 'All levels',
            'start_time_wed' => '18:45', 'end_time_wed' => '20:15',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 200, 'reduced_price' => 180,
            'status'=> 'active'
        ]);
        $c16->teachers()->attach([3,5]); // Fred & Kouamé
        $c16->styles()->attach(16);
        // CCA

        $c17 = Course::create([
            'name' => 'Lady Styling',
            'slug' => 'lady-styling',
            'wednesday'=> 1, 'level' => 'All levels',
            'start_time_wed' => '19:00', 'end_time_wed' => '20:15',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 180, 'reduced_price' => 160,
            'status'=> 'active',
        ]);
        $c17->teachers()->attach(8); // Sabrina
        $c17->styles()->attach(5);
        // Usine Kugler

        $c18 = Course::create([
            'name' => 'Boogaloo',
            'slug' => 'boogaloo',
            'wednesday'=> 1, 'level' => 'All levels',
            'start_time_wed' => '19:30', 'end_time_wed' => '20:30',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c18->teachers()->attach(2); // Corinne
        $c18->styles()->attach(16);
        // Vivre son Corps


        $c19 = Course::create([
            'name' => 'Salsa Cubaine',
            'slug' => 'salsa-cubana',
            'wednesday'=> 1, 'level' => 'Intermediate',
            'start_time_wed' => '19:30', 'end_time_wed' => '20:45',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        // $c19->teachers()->attach([10,40]); // Vivien & Assistante
        $c19->styles()->attach(7);
        // Diafa | Salle B

        $c20 = Course::create([
            'name' => 'Salsa cubaine',
            'slug' => 'salsa-cubaine',
            'wednesday'=> 1, 'level' => 'Intermediate',
            'start_time_wed' => '20:30', 'end_time_wed' => '22:00',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 200, 'reduced_price' => 180,
            'status'=> 'active',
        ]);
        //$c20->teachers()->attach([5,42]); // Kouamé & Assistante
        $c20->styles()->attach(7);
        // CCA

        $c21 = Course::create([
            'name' => 'Salsa Porto',
            'slug' => 'salsa-porto',
            'wednesday'=> 1, 'level' => 'Intermediate',
            'start_time_wed' => '20:30', 'end_time_wed' => '22:00',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 200, 'reduced_price' => 180,
            'status'=> 'active',
        ]);
        $c21->teachers()->attach([2,3]); // Corinne & Fred
        $c21->styles()->attach(1);
        // Vivre son Corps

        $c22 = Course::create([
            'name' => 'Salsa Cubaine',
            'slug' => 'salsa-cubaine',
            'wednesday'=> 1, 'level' => 'Intermediate',
            'start_time_wed' => '20:45', 'end_time_wed' => '22:00',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 180, 'reduced_price' => 160,
            'status'=> 'active',
        ]);
        //$c22->teachers()->attach([10,40]); // Vivien & assistante
        $c22->styles()->attach(7);
        // Diafa | Salle B

        $c23 = Course::create([
            'name' => 'Dancehall',
            'slug' => 'dancehall',
            'thursday'=> 1, 'level' => 'All levels',
            'start_time_thu' => '19:00', 'end_time_thu' => '20:00',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c23->teachers()->attach(4); // Kelly
        $c23->styles()->attach(3);
        // CCA

        $c24 = Course::create([
            'name' => 'salsa cubaine',
            'slug' => 'salsa-cubaine',
            'thursday'=> 1, 'level' => 'Beginner',
            'start_time_thu' => '19:30', 'end_time_thu' => '20:30',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c24->teachers()->attach([11,13]);// Jessica & Yann
        $c24->styles()->attach(7);
        // Diafa | Salle B

        $c25 = Course::create([
            'name' => 'salsa cubaine',
            'slug' => 'salsa-cubaine',
            'thursday'=> 1, 'level' => 'Beginner',
            'start_time_thu' => '20:00', 'end_time_thu' => '21:00',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c25->teachers()->attach([4,12]); // Kelly & Edgar
        $c25->styles()->attach(7);
        // CCA

        $c26 = Course::create([
            'name' => 'Son cubain (couple)',
            'slug' => 'son-cubain-couple',
            'thursday'=> 1, 'level' => 'Intermediate',
            'start_time_thu' => '20:30', 'end_time_thu' => '22:00',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 200, 'reduced_price' => 180,
            'status'=> 'active',
        ]);
        $c26->teachers()->attach([5,9]); // Sonia & Kouamé
        $c26->styles()->attach(15);
        // Diafa | Salle B

        $c27 = Course::create([
            'name' => 'Salsa Cubaine',
            'slug' => 'salsa-cubaine',
            'thursday'=> 1, 'level' => 'Advanced',
            'start_time_thu' => '20:30', 'end_time_thu' => '22:00',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 200, 'reduced_price' => 180,
            'status'=> 'active',
        ]);
        $c27->teachers()->attach([11,13]); // Jessica & Yann
        $c27->styles()->attach(7);
        // Diafa | Salle A

        $c28 = Course::create([
            'name' => 'Salsa Cubaine Interm',
            'slug' => 'salsa-cubaine-interm',
            'thursday'=> 1, 'level' => 'Intermediate', 'level_number' => '2',
            'start_time_thu' => '21:00', 'end_time_thu' => '22:00',
            'start_date' => '2020-06-01', 'end_date' => '2020-06-15',
            'full_price' => 160, 'reduced_price' => 140,
            'status'=> 'active',
        ]);
        $c28->teachers()->attach([4,12]);   // Kelly & Edgar
        $c28->styles()->attach(7);
        // CCA
    }
}



// 1   Gabriel	Zambrano
// 2   Corinne	Lecaçon
// 3   Fred	Dancefloor
// 4   Kelly	Mota
// 5   Kouamé  Kouadio
// 6   Laëtycia	Vumuka
// 7   Mona	Georgieva
// 8   Sabrina	Giacomini
// 9   Sonia	Martinez
// 10  Vivien  Hochstatter
// 11	Yann    Mayor
// 12  Edgar
// 13  Jessica
// 14  Ivan    Larson


// 1	Salsa on1
// 2	Salsa on2
// 3	Dancehall
// 4	Hip-hop
// 5	Lady Styling
// 6	Men Styling
// 7	Salsa cubana
// 8	Rueda de Casino
// 9	Rumba
// 10	Afro-cubano
// 11	Timba
// 12	Rumba
// 13	Afro-beats
// 14	House
// 15	Streching
// 16	Salsa fusion
