<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()    
    {


        User::create([
            'email'     => 'isabelabagueros@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$M9g9kV8CG97EVOPVYusplOc5euHjZUJGWt2bNcMZBbPZj4Fmb8IHe',    
            'firstname' => 'isabela',
            'lastname'  => 'bagueos', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'https://www.facebook.com/isabela.bagueros/',
        ]);

        User::create([
            'email'     => 'juliet_kilo@msn.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$ul260Wcw7/TR542qKay.KOJTHhgZenUMPv4yqSh54CKChEwatxGCq',    
            'firstname' => 'Kolias',
            'lastname'  => 'Jane', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Jane Kolias',
        ]);

        User::create([
            'email'     => 'pat.sauthier@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$bwcXkUd1MuWSxKVApxA5n.A8F7hHPV1U96e9Yk9wwN1RUmXXfmE5C',    
            'firstname' => 'patrick',
            'lastname'  => 'sauthier', 
            'birthday'  => '',
            'gender'    => 'male',
            'facebook'  => 'patric sauthier',
        ]);
        User::create([
            'email'     => 'mrymmtz@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$1lw9cO0osUVmtLNCT7zS0uEXppfhHK7DoPujlsWB5wVPEq2Spoi..',    
            'firstname' => 'Miryam',
            'lastname'  => 'Martinez', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'MIRYAM MARTÍNEZ',
        ]);
        User::create([
            'email'     => 'richrevestir@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$cawUlGb8/pQ0E4ZTeFoDoOReueXt6M0BTElVRRu8tjgePGC2VbPGa',    
            'firstname' => 'Richel',
            'lastname'  => 'Imperial', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Richel Pedrosa Revestir',
        ]);
        
        User::create([
            'email'     => 'lavinia.sabin@yahoo.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$IXMRUtm9zCm6hxvxGIdzgOOotOPJ/R2isanvgf5Vs044Ejf4DJXiS',    
            'firstname' => 'Lavinia',
            'lastname'  => 'Sabin', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'https://www.facebook.com/lav.kapwera',
        ]);

        User::create([
            'email'     => 'tulakmato@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$wdW8Yye6GdTiQWu.cbNBrugRGpcTttrajKrlVnrAYHfqzDT23r0AS',    
            'firstname' => 'Martin',
            'lastname'  => 'Straka', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'https://www.facebook.com/martin.straka.397',
        ]);
        User::create([
            'email'     => 'andreeaionita11@yahoo.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$vc5b3WGOBts0g.u4ngfVGOs7.oNcAXMvNABuJFM.AJIuhre0W6qvS',    
            'firstname' => 'Andreea',
            'lastname'  => 'Ionita', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'https://www.facebook.com/andreea.ionita.54',
        ]);
        User::create([
            'email'     => 'insidertimos@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$p4z8DTSXbbwWpxNYb3aNueO/9zpoUkYmGc52Psp3l7pmbCU8d4ny.',    
            'firstname' => 'Insider',
            'lastname'  => 'Timos', 
            'birthday'  => '',
            'gender'    => 'male',
            'facebook'  => 'https://www.facebook.com/insideyu',
        ]);
        User::create([
            'email'     => 'ammadjajja@yahoo.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$v.B3bt/iLvQbwiFrUFtr7.edeQUvXDUZCNLmqsP32520QRaHQbose',    
            'firstname' => 'Ammad',
            'lastname'  => 'Muzaffar', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'https://www.facebook.com/ammad.jajja',
        ]);
        User::create([
            'email'     => 'monajassem@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$0gKUS5CjstpPxhATzrzWFuaVkitqe0sIVRyD0Ldl79sGUux3lnof2',    
            'firstname' => 'Mona',
            'lastname'  => 'Jassem', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Mona jassem',
        ]);
        User::create([
            'email'     => 'atelierlajoie@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$BpbPesdXHaA81CPC8J36nuJATl/OJVSzxoRNoDSq2kstznDZgf05.',    
            'firstname' => 'Urmila',
            'lastname'  => 'Shakti', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Shakti Urmila Wyss',
        ]);
        User::create([
            'email'     => 'margauxcantais@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$sTZIK8OVCMhfMHq6uQi1UeR7lqTNoIvajK2PWSMqLN2WyKdYJDdU6',    
            'firstname' => 'Margaux',
            'lastname'  => 'Jacta', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'https://www.facebook.com/margaux.cantais',
        ]);
        User::create(  [
            'email'     => 'charisha@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$5r/DmQ695LIE1w3f.3nSvedn8nrFZHv8vA5UwpGwZXa.v5UStr3pG',    
            'firstname' => 'Charisha',
            'lastname'  => 'Jayawardena', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Charisha Jayawardena',
        ]);
        User::create(  [
            'email'     => 'czarinaw@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$6ErIlDj1EmSz0mKwFWzmb.UT0BaAQ0OLzyOrbJkfnIvWERnv4fOKG',    
            'firstname' => 'Czarina',
            'lastname'  => 'Wilson', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Czarina Wilson',
        ]);
        User::create(  [
            'email'     => 'daleen.vanwyk@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$KpAh.Hy4wCgyNVgwuGB1k.xvXK0wx2X91XzI8VaO69oCuUqsD7x9i',    
            'firstname' => 'Daleen',
            'lastname'  => 'van Wyk', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'daleenvanwyk',
        ]);
        User::create([
            'email'     => 'simon.tremet@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$2A8HJ/CDbR5JHzA00eC/4e8CHPj7sN5uTaZQkl4O31fHnLbQxXMQ2',    
            'firstname' => 'Simon',
            'lastname'  => 'Tremet', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Simon Salsa',
        ]);
        User::create([
            'email'     => 'guillaume.margheritora@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$Wd0rrMfLIl0DK51jbaxR/.xeWbkit0hOH03i6gw3pH/P5aB72NIBa',    
            'firstname' => 'Guillaume',
            'lastname'  => 'Margheritora', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Guillaume Detoulouse',
        ]);
        User::create([
            'email'     => 'desmonts.thyphaine@yahoo.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$dQGwbu.mwNAqhoemKyr2J.bSTr7eYUID4ICDyme.55eVkL50eZ1tW',    
            'firstname' => 'Thyphaine',
            'lastname'  => 'Desmonts', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Thyphaine Desmonts',
        ]);
        User::create([
            'email'     => 'te.frederic@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$UNX1dW20SSa8gqzqZoVq5emO3SeOXLgkMvCDhrddH7j89TuZ2pPya',    
            'firstname' => 'Fred',
            'lastname'  => 'Dancefloor', 
            'birthday'  => '',
            'gender'    => 'male',
            'facebook'  => 'Fred dancefloor',
        ]);
        User::create([
            'email'     => 'sylianetanguy@hotmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$jQld6YBgxkiZi234IkT2D.B1l543q2nopbSxVaEsTug0Grx9OfgYK',    
            'firstname' => 'Syliane',
            'lastname'  => 'Tanguy', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'https://www.facebook.com/syliane.tanguy',
        ]);
        User::create([
            'email'     => 'Stefanosmom17@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$amMj6X2RukvkWHelYAYJ2OY8uBmmjNJ9Jj6/3zAURVqoROlqlmNqy',    
            'firstname' => 'Silvana',
            'lastname'  => 'Acona', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'Silvana Acona',
        ] );
        User::create([
            'email'     => 'nicole.boemeke@gmx.de',
            'email_verified_at' => now(),
            'password'  => '$2y$10$LYtDQ1zHzgFLbSqG/kv76.NZL11YTVi3BFpvUO6MdQ8tsPESFyHJ2',    
            'firstname' => 'Nicole',
            'lastname'  => 'Sommer', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'Nicole Sommer',
        ]);
        User::create([
            'email'     => 'veronique.zeau@orange.fr',
            'email_verified_at' => now(),
            'password'  => '$2y$10$7gZmzAu3iPwHi96ROXWEkOThG2UVN7zM.hgiyKdR6mO716Ub5JuzG',    
            'firstname' => 'Véronique',
            'lastname'  => 'Zéau', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'Véronique Zéau',
            'created_at'=> '2020-07-08 13:42:57'
        ]);
        User::create(  [
            'email'     => 'sinead.hewitt@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$rXDWd1NhM62H4Pou7z/5MuHacBmf6HgP/MIZVSnpidMFsLNKyG2C.',    
            'firstname' => 'Sinead',
            'lastname'  => 'Hewitt', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Sinead Hewitt',
            'created_at'=> '2020-07-08 20:23:27'
        ]);
        User::create([
            'email'     => 'erin.victor@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$Q4XC2RomLaZnfwJJREc7Eezzh.ruLp6xOD3Z3QLpYLJBHXG8IBMGu',    
            'firstname' => 'Erin',
            'lastname'  => 'Victor', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'https://www.facebook.com/eRinz30/',
            'created_at'=> '2020-07-09 01:48:47'
        ]);
        User::create([
            'email'     => 'soulshineha@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$kyKEW0lfiBTmXjaIp2DB2eL1uCx7ugRkMGj7KH0hKQtu5IXK6l6MC',    
            'firstname' => 'Lori',
            'lastname'  => 'Patterson', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Lori Patterson',
            'created_at'=> '2020-07-09 14:58:48'
        ]);
        User::create([
            'email'     => 'ana@avzarquitectura.es',
            'email_verified_at' => now(),
            'password'  => '$2y$10$xvdvG0oy7gJ4U1kV5Jx2muwfH3eFpHHsW63wdzIAQIghblN3/irt.',    
            'firstname' => 'Ana',
            'lastname'  => 'Viñas', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'Ana Viñas',
            'created_at'=> '2020-07-10 08:47:30'
        ]);
        User::create([
            'email'     => 'casey27917@hotmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$RnUIuEST.RbeRpRrqZZqnu4Rp4C6Lk36C3weXGAtRGYBsITX2A2x2',    
            'firstname' => 'Hugh',
            'lastname'  => 'Casey', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Hugh casey',
            'created_at'=> '2020-07-10 18:48:17'
        ]);
        User::create([
            'email'     => 'm_amorosa@hotmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$NsEd1rnsAM8a9zVLGDM6buduMeYqQGq766ddWWw9uvqlaXQxNQMsy',    
            'firstname' => 'Manuela',
            'lastname'  => 'Amorosa', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'Manuela Amorosa',
            'created_at'=> '2020-07-11 07:03:22'
        ]);
        User::create([
            'email'     => 'gino@rocca.dk',
            'email_verified_at' => now(),
            'password'  => '$2y$10$lia1ZS/3aJ8Xi402CbSAe.9jzom0GhokY8b8h86BxrbbY7Ti3yiiu',    
            'firstname' => 'Gino',
            'lastname'  => 'Rocca', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Gino Rocca',
            'created_at'=> ''
        ]);
        User::create([
            'email'     => 'periwinkleseastar@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$H7Hdf8xZf.97TeqXLZPwt.uqmBbNSI0vrrn2uwo4Sr3y1OMCQ.QgW',    
            'firstname' => 'Kathleen',
            'lastname'  => 'Young', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'https://www.facebook.com/kathleen.g.young',
            'created_at'=> '2020-07-11 16:20:38'
        ]);
        User::create([
            'email'     => 'calleluna@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$WzNI63JD0z73RNM36Ux.lOBtdNWMO7n98tZ7vamkWOvXq4p24c8Ee',    
            'firstname' => 'Nadege',
            'lastname'  => 'Guillou', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'Nadege Guillou',
            'created_at'=> '2020-07-12 13:11:46'
        ]);
        User::create([
            'email'     => 'hofer_martina@bluewin.ch',
            'email_verified_at' => now(),
            'password'  => '$2y$10$md67HOGrQJD7m0VAJQbgGeMpfmwtdDu/13UQagceI0GUMTgs5Uoeq',    
            'firstname' => 'Martina',
            'lastname'  => 'Hofer', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'Martina Hofer',
            'created_at'=> '2020-07-12 15:00:49'
        ]);
        User::create([
            'email'     => 'dancewithsuzy@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$Q8tZ7eUzX1ZJu1/Bk3Oyx.XUrzMaXtdNPXAo.CSWrMuuVrr44yemW',    
            'firstname' => 'Suzy',
            'lastname'  => 'Filip', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Suzy Filip',
            'created_at'=> '2020-07-12 16:51:09'
        ]);
        User::create(  [
            'email'     => 'camille.treujou@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$lOb/OwXAFbmnMMrHTFSCRuVNafJwOtPDWRSsBoGtqszOk1h/YeDEe',    
            'firstname' => 'Camille',
            'lastname'  => 'Treujou', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Camille Treujou',
            'created_at'=> '2020-07-12 18:36:52'
        ]);
        User::create([
            'email'     => 'skmladenovic@hotmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$Ae6QKP35tgQxD1IQfs8Dj.NvFH8qMGfAyg5uz4FyR7yAHO8m/ys96',    
            'firstname' => 'Sonia',
            'lastname'  => 'Mladenovic', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'Sonnysun',
            'created_at'=> '2020-07-13 06:30:09'
        ] );
        User::create([
            'email'     => 'laurianezosso@hotmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$qv1sOxe0/L4Emc5DF2/EiuVbF12K1nhgbTJukHKNdxvs9ji87PNyu',    
            'firstname' => 'Lauriane',
            'lastname'  => 'Zosso', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'Lauriane Zosso',
            'created_at'=> '2020-07-13 18:55:13'
        ] );
        User::create([
            'email'     => 'ziercherguillaume@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$WfjvS4bi62GJcqkfW8VdTuVxwQ0Lr574tnJ1/m32P6muKyhArGdNK',    
            'firstname' => 'Guillaume',
            'lastname'  => 'Ziercher', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Guillaume Ziercher',
            'created_at'=> '2020-07-14 17:15:12'
        ]);
        User::create([
            'email'     => 'kb2000@aim.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$/4fXYnucuTF20zQANHYuGeSwmxToftC2sE1y7IgqApLqMoRm1GmgS',    
            'firstname' => 'Calvin',
            'lastname'  => 'Yu', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'https://www.facebook.com/remaingenuine',
            'created_at'=> '2020-07-15 09:40:10'
        ]);
        User::create([
            'email'     => 'mathilde.dumas05@gmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$W7bEoCOD52X5E1wemK2fQuQ5HXMERfQpa/KaWyDY8U8vZFDi9PEl2',    
            'firstname' => 'Mathilde',
            'lastname'  => 'Dumas', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'Mathilde Dumas',
            'created_at'=> '2020-07-15 12:10:41'
        ]);
        User::create([
            'email'     => 'muriel.bernardin@orange.fr',
            'email_verified_at' => now(),
            'password'  => '$2y$10$mgOaXBsR9iw8yR50jlhNSuZl8U4B2ICU8WA/2CsnAndbjCcNnxaJm',    
            'firstname' => 'muriel',
            'lastname'  => 'Bernardin', 
            'birthday'  => '',
            'gender'    => 'female',
            'facebook'  => 'Muriel Bernardin',
            'created_at'=> '2020-07-21 16:24:15',
        ]);
        User::create([
            'email'     => 'xzhuqing@hotmail.com',
            'email_verified_at' => now(),
            'password'  => '$2y$10$x0fRrWswBeoi75kgk/cG4OlQlWGNXIZSt9szslG0a3DG7D44Kq5F6',    
            'firstname' => 'Shirley',
            'lastname'  => 'Xu', 
            'birthday'  => '',
            'gender'    => '',
            'facebook'  => 'Zhu Xu',
            'created_at'=> '2020-07-22 10:42:15',
        ]);        
    }
}