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
            ['Gibson', 'contact@gibson.com', '309 Plus Park Blvd, Nashville, TN, USA', '02 22 33 44 55'],
            ['Korg', 'contact@korg.com', '1-10-2 Nakano, Nakano-ku, Tokyo, Japon', '03 89 10 11 12'],
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
