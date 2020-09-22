<?php

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::create([
            'name'          => 'AJ Studio',
            'shortname'     => 'AJ Studio',
            'address'       => 'Rue de carouge 35',            
            'postal_code'   => '1205',
            'city'          => 'Genève',
            'neighborhood'  => 'Planpalais',
            'state'         => 'Genève',
            'country'       => 'Switzerland',
            'google_maps_shortlink'    => 'https://goo.gl/maps/YQW9FN34QEn',
            'google_maps'    => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11047.142782797582!2d6.1436611!3d46.1948231!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf3f3e883bf9f03!2sGeneva+Swing!5e0!3m2!1sfr!2sch!4v1525178730015" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>',            
        ]);

        Location::create([
            'name'          => 'Bartdak',
            'shortname'     => 'Bartdak',
            'address'       => 'Rue de Lyon 106',            
            'postal_code'   => '1203',
            'city'          => 'Genève',
            'neighborhood'  => 'Servette',
            'state'         => 'Genève',
            'country'       => 'Switzerland',
            'google_maps'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.0673254301587!2d6.121727250886276!3d46.20911567901434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c64c63dece719%3A0xcb3e6fd72d729c88!2sRue+de+Lyon+106%2C+1203+Gen%C3%A8ve!5e0!3m2!1sfr!2sch!4v1457708787459" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'google_maps_shortlink' => 'https://goo.gl/maps/HSbcnMqapeE2',
        ]);

        Location::create([
            'name'          => 'Corps à Corps & Âme',
            'shortname'     => 'CCA',
            'address'       => 'Rue de la Servette 23',            
            'postal_code'   => '1201',
            'city'          => 'Genève',
            'neighborhood'  => 'Servette',
            'state'         => 'Genève',
            'country'       => 'Switzerland',
            'google_maps'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.030388440152!2d6.135446050886288!3d46.20985047901436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c64d99dbb39db%3A0x6944b6daff25080d!2sRue+de+la+Servette+23%2C+1201+Gen%C3%A8ve!5e0!3m2!1sfr!2sch!4v1457693002881" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'google_maps_shortlink' => 'https://goo.gl/maps/mBi7u3WwWEw',
        ]);

        Location::create([
            'name'          => 'Dance Aera',
            'address'       => 'Rue de la Coulouvrenière 19',            
            'postal_code'   => '1204',
            'city'          => 'Genève',
            'neighborhood'  => 'Jonction',
            'state'         => 'Genève',
            'country'       => 'Switzerland',
            'google_maps_shortlink' => 'https://goo.gl/maps/TNqn6DS9XG72',
            'google_maps'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.32452960493!2d6.13512491558237!3d46.20399877911661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c64d69326bcf9%3A0xce387c0283cd71d2!2sDance+Area+Geneva!5e0!3m2!1sfr!2sch!4v1525431673367" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>',
        ]);

        Location::create([
            'name'          => 'Diafa',
            'address'       => 'Rue Pictet-de-Bock 6',
            'address_info'  => '',
            'postal_code'   => '1204',
            'city'          => 'Genève',
            'neighborhood'  => 'Plainpalais',
            'state'         => 'Genève',
            'country'       => 'Switzerland',
            'google_maps'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.8433395464053!2d6.1403078155820365!3d46.193676079116464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c7ad43a4d5831%3A0x6848ee65b49c3016!2sEcole+Diafa+-+Danse%2C+Yoga+%26+Th%C3%A9%C3%A2tre!5e0!3m2!1sfr!2sch!4v1499200062463" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'google_maps_shortlink' => 'https://goo.gl/maps/zET3ucqTyZm',
        ]);

        Location::create([
            'name'          => 'Encore en Corps',
            'address'       => 'chemin de la gravière 8bis',            
            'postal_code'   => '1227',
            'city'          => 'Les Acacias',
            'neighborhood'  => 'Les Acacias',
            'state'         => 'Genève',
            'country'       => 'Switzerland',
            'google_maps'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.687354015368!2d6.1282885161465455!3d46.196779892281754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c7b2d11426ad3%3A0x70d4906d0fe004a7!2sEcole+de+danse+Escope!5e0!3m2!1sfr!2sch!4v1526036297673" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'google_maps_shortlink' => 'https://goo.gl/maps/4Kofp8G3kZw',
        ]);

        Location::create([
            'name'          => 'Studio Vélodrome',
            'shortname'     => 'Vélodrome',
            'address'       => 'Rue du vélodrome 18',            
            'postal_code'   => '1205',
            'city'          => 'Genève',
            'neighborhood'  => 'Jonction',
            'state'         => 'Genève',
            'country'       => 'Switzerland',
            'google_maps'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d22092.292178820164!2d6.131432!3d46.199781!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c64d2e151c4db%3A0xea431fb4020ab483!2sRue+du+V%C3%A9lodrome+14%2C+1205+Gen%C3%A8ve%2C+Suisse!5e0!3m2!1sfr!2sus!4v1534868845352" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'google_maps_shortlink' => 'https://goo.gl/maps/yVPkqABgDX92',
        ]);

        Location::create([
            'name'          => 'Usine Kugler',
            'shortname'     => 'Kugler',
            'address'       => 'Chemin de la Truite 4bis',            
            'postal_code'   => '1205',
            'city'          => 'Genève',
            'neighborhood'  => 'Jonction',
            'state'         => 'Genève',
            'country'       => 'Switzerland',
            'google_maps'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2761.432166910195!2d6.123457550885996!3d46.20185727901415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c64cc4422a7b7%3A0x2db9e10eae203d26!2sRue+de+la+Truite+4%2C+1205+Gen%C3%A8ve!5e0!3m2!1sfr!2sch!4v1457709064486" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'google_maps_shortlink' => 'https://goo.gl/maps/rgWXRXd8bvu',
        ]);

        Location::create([
            'name'          => 'Vivre son Corps',
            'address'       => 'Rue de la Servette 61',            
            'postal_code'   => '1202',
            'city'          => 'Genève',
            'neighborhood'  => 'Servette',
            'state'         => 'Genève',
            'country'       => 'Switzerland',
            'google_maps'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11043.75018100402!2d6.1334893!3d46.2116974!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc81314a6b5190b1a!2sEcole+de+danse+Vivre+son+Corps!5e0!3m2!1sfr!2sch!4v1561640618761!5m2!1sfr!2sch" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'google_maps_shortlink' => 'https://goo.gl/maps/bkZCzVVEaXXtLXVn8',
        ]);
    }
}