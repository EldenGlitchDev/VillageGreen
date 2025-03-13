<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Fournisseur;

class Jeu4Fournisseur extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $donneesFournisseur=[
            ['Yamaha', 'contact@yamaha.com', '1-1 Takamatsu-cho, Hamamatsu, Japon', '03 34 56 78 90'],
            ['Roland', 'contact@roland.com', '5-16-1, Takakura-cho, Shibuya-ku, Tokyo, Japon', '01 45 67 89 01'],
            ['Fender', 'contact@fender.com', '2199 South Street, Corona, CA, USA', '01 23 45 67 89'],
            ['Korg', 'contact@korg.com', '1-10-2 Nakano, Nakano-ku, Tokyo, Japon', '03 89 10 11 12'],
            ['Stagg', 'contact@stagg.com', 'Place de la Musique 12, Bruxelles, Belgique', '02 34 56 78 90'],
            ['Selmer', 'contact@selmer.com', '42 Rue de la Musique, Mantes-la-Jolie, France', '01 48 23 45 67'],
            ['Bach', 'contact@bach.com', '1234 Harmony Road, Elkhart, IN, USA', '01 89 76 54 32'],
            ['Meinl', 'contact@meinl.com', 'Main Street 45, Gutenstetten, Allemagne', '03 40 50 60 70'],
            ['LP', 'contact@lp.com', '1700 E. Vernon Ave, Los Angeles, CA, USA', '02 77 88 99 00'],
            ['Akai', 'contact@akai.com', '1-3-7 Ochanomizu, Chiyoda-ku, Tokyo, Japon', '03 58 67 78 89'],
            ['Ravi', 'contact@ravi.com', 'Vivek Tower, Sector 15, Noida, Inde', '91 98 76 54 32'],
            ['Meinl', 'contact@meinl.com', 'Main Street 45, Gutenstetten, Allemagne', '03 40 50 60 71'],
            ['Koto Shop', 'contact@kotoshop.com', '4-6-8 Kanda, Chiyoda-ku, Tokyo, Japon', '03 72 34 56 78'],
            ['Dunlop', 'contact@dunlop.com', '2500 8th Avenue, Benicia, CA, USA', '02 33 44 55 66'],
            ['Hosa', 'contact@hosa.com', '1820 E. California Avenue, Salt Lake City, UT, USA', '01 11 22 33 44'],
            ['Ibanez', 'contact@ibanez.com', '1-8-19 Takada, Toshima-ku, Tokyo, Japon', '03 99 88 77 66'],
            ['Focusrite', 'contact@focusrite.com', 'The Old Dairy, 14a The Green, London, Royaume-Uni', '01 20 30 40 50'],
            ['Zoom', 'contact@zoom.com', '2-16-3, Kanda-Nishikicho, Chiyoda-ku, Tokyo, Japon', '03 11 22 33 44'],

        ];

        foreach ($donneesFournisseur as [$nomFourni, $mailFourni, $adresseFourni, $telFourni]) {

            $fournisseur = new Fournisseur();

            $fournisseur->setNomFourni($nomFourni)
                        ->setMailFourni($mailFourni)
                        ->setAdresseFourni($adresseFourni)
                        ->setTelFourni($telFourni);
            $manager->persist($fournisseur);
        };

        $manager->flush();
    }
}
