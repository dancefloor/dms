<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gab = User::firstOrCreate([
            'firstname'     => 'Gabriel',
            'lastname'      => 'Zambrano',
            'email'         => 'gab.zambrano@gmail.com',
            'password'      => Hash::make('password'),
            'profession'    => 'entrepreneur',
            'picture'       => '',
            'gender'        => 'male',
            'mobile'        => '+41 76 571 4931',
            'phone'         => '+385 99 648 3693',
            'street'        => 'Karašička ulica',
            'street_number' => '29',
            'address_info'  => '',
            'postal_code'   => '10000',
            'city'          => 'Zagreb',
            'state'         => 'Zagreb',
            'country'       => 'Croatia',
            'facebook'      => 'https://www.facebook.com/',
            'instagram'     => 'https://www.instagram.com/uespiiiiii/',
            'linkedin'      => 'https://hr.linkedin.com/',
            'twitter'       => '@gab_zam',
            'skype'         => 'gabrielvinci',
            'snapchat'      => '@elgato',
            'tiktok'        => '@gabzon',
            'youtube'       => 'https://www.youtube.com/',
            'email_verified_at' => now(),
        ]);
        $gab->roles()->attach(1);


        $coco = User::firstOrCreate([
            'firstname'     => 'Corinne',
            'lastname'      => 'Lecaçon',
            'email'         => 'corinne@dancefloorgenevasalsa.ch',
            'password'      => Hash::make('password'),
            'picture'       => 'images/teachers/coco-square.png',
            'portrait'      => 'images/teachers/coco.jpg',
            'gender'        => 'female',
            'mobile'        => '+41 76 571 3939',
            'email_verified_at' => now(),
        ]);
        $coco->roles()->attach([3, 4]);

        $fred = User::firstOrCreate([
            'firstname'     => 'Fred',
            'lastname'      => 'Dancefloor',
            'email'         => 'te.frederic@gmail.com',
            'password'      => '$2y$10$UNX1dW20SSa8gqzqZoVq5emO3SeOXLgkMvCDhrddH7j89TuZ2pPya',
            'picture'       => 'images/teachers/fred-square.png',
            'portrait'      => 'images/teachers/fred.jpg',
            'gender'        => 'male',
            'mobile'        => '+41 76 571 2003',
            'email_verified_at' => now(),            
        ]);        
        $fred->roles()->attach([2, 3]);


        $kelly = User::firstOrCreate([
            'firstname'     => 'Kelly',
            'lastname'      => 'Mota',
            'email'         => 'kelly@dancefloorgenevasalsa.ch',
            'password'      => Hash::make('password'),
            'picture'       => 'images/teachers/kelly-square.png',
            'portrait'      => 'images/teachers/kelly.jpg',
            'gender'        => 'female',
            'mobile'        => '+41 76 571 4928',
            'email_verified_at' => now(),
        ]);
        $kelly->roles()->attach(3);

        $kouame = User::firstOrCreate([
            'firstname'     => 'Kouamé',
            'lastname'      => 'Kouadio',
            'email'         => 'kouame@dancefloorgva.com',
            'password'      => '$2y$10$AGr3NSvhPFYZ7R7eA.bMa.XMIjR7gJteJc1sGlfTe3gKjLOXJxJGm',
            'picture'       => 'images/teachers/kouame-square.png',
            'portrait'      => 'images/teachers/kouame.jpg',
            'gender'        => 'male',
            'mobile'        => '+41 76 571 3939',
            'email_verified_at' => now(),
        ]);
        $kouame->roles()->attach([2, 3]);

        $laety = User::firstOrCreate([
            'firstname'     => 'Laëtycia',
            'lastname'      => 'Vumuka',
            'email'         => 'laetycia.vumuka@gmail.com',
            'password'      => Hash::make('password'),
            'picture'       => 'images/teachers/laetycia-square.png',
            'portrait'      => 'images/teachers/laetycia.jpg',
            'gender'        => 'female',
            'mobile'        => '+41 76 571 3939',
            'email_verified_at' => now(),
        ]);
        $laety->roles()->attach(3);

        $mona = User::firstOrCreate([
            'firstname'     => 'Mona',
            'lastname'      => 'Georgieva',
            'email'         => 'monageorgieva@gmail.com',
            'password'      => Hash::make('password'),
            'picture'       => 'images/teachers/mona-square.png',
            'portrait'      => 'images/teachers/mona.jpg',
            'gender'        => 'female',
            'mobile'        => '+41 76 571 0392',
            'email_verified_at' => now(),
        ]);
        $mona->roles()->attach(3);

        $sabrina = User::firstOrCreate([
            'firstname'     => 'Sabrina',
            'lastname'      => 'Giacomini',
            'email'         => 'sab86_81@hotmail.com',
            'password'      => Hash::make('password'),
            'picture'       => 'images/teachers/sabrina-square.png',
            'portrait'      => 'images/teachers/sabrina.jpg',
            'gender'        => 'female',
            'mobile'        => '+41 76 571 2312',
            'email_verified_at' => now(),
        ]);
        $sabrina->roles()->attach(3);

        $sonia = User::firstOrCreate([
            'firstname'     => 'Sonia',
            'lastname'      => 'Martinez',
            'email'         => 'Sonia.martinez001@gmail.com',
            'password'      => Hash::make('password'),
            'picture'       => 'images/teachers/sonia-square.png',
            'portrait'      => 'images/teachers/sonia.jpg',
            'gender'        => 'female',
            'mobile'        => '+41 76 571 3221',
            'email_verified_at' => now(),
        ]);
        $sonia->roles()->attach(3);

        $vivien = User::firstOrCreate([
            'firstname'     => 'Vivien',
            'lastname'      => 'Hochstatter',
            'email'         => 'vivien.m.hoch@gmail.com',
            'password'      => Hash::make('password'),
            'picture'       => 'images/teachers/vivien-square.png',
            'portrait'      => 'images/teachers/vivien.jpg',
            'gender'        => 'male',
            'mobile'        => '+41 76 571 19393',
            'email_verified_at' => now(),
        ]);
        $vivien->roles()->attach(3);

        $yann = User::firstOrCreate([
            'firstname'     => 'Yann',
            'lastname'      => 'Mayor',
            'email'         => 'mayor@geaction.com',
            'password'      => Hash::make('password'),
            'picture'       => 'images/teachers/yann-square.png',
            'portrait'      => 'images/teachers/yann.jpg',
            'gender'        => 'male',
            'mobile'        => '+41 76 571 3577',
            'email_verified_at' => now(),
        ]);
        $yann->roles()->attach(3);

        $edgar = User::firstOrCreate([
            'firstname'     => 'Edgar',
            'lastname'      => 'Ochoa',
            'email'         => 'edgar8amedina@gmail.com',
            'password'      => '$2y$10$5EpVNgK0x48poTLdwlQlhu/mExHKGuwRbHF1a.5vd6iVJDywROymi',
            'gender'        => 'male',
            'mobile'        => '+41 76 571 3523',
            'email_verified_at' => now(),
            'facebook' => 'https://www.facebook.com/edgar.ochoa.7161',
        ]);
        $edgar->roles()->attach(3);

        $jess = User::firstOrCreate([
            'firstname'     => 'Jessica',
            'lastname'      => 'Mayor',
            'email'         => 'jessica@dancefloorgenevasalsa.ch',
            'password'      => Hash::make('password'),
            'gender'        => 'female',
            'mobile'        => '+41 76 232 1523',
            'email_verified_at' => now(),
        ]);
        $jess->roles()->attach(3);

        $ivan = User::firstOrCreate([
            'firstname'     => 'Ivan',
            'lastname'      => 'Larson',
            'email'         => 'ivan@dancefloorgenevasalsa.ch',
            'password'      => Hash::make('password'),
            'gender'        => 'male',
            'mobile'        => '+41 76 232 1523',
            'email_verified_at' => now(),
        ]);
        $ivan->roles()->attach(3);
    }
}
