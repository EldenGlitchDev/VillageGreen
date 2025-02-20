<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Commande;

class Jeu5Commande extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // Commande 1

        $commande1 = new Commande();
        $commande1->setDateComm(new \DateTime('2025-01-15'));
        $commande1->setDateLivrComm(new \DateTime('2025-01-20'));
        $commande1->setPrixTotalComm('300.00');
        $commande1->setPrixUnitComm('150.00');
        $commande1->setLibelleComm('Guitare acoustique');
        $commande1->setStatutComm('En cours');
        $commande1->setUtilComm('Dupont Pierre');
        $commande1->setSousTotalComm('275.00');
        $commande1->setFdp('25.00');
        $commande1->setMontantPaiem('300.00');
        $commande1->setDatePaiem(new \DateTime('2025-01-15'));
        $commande1->setStatutPaiem('Validée');
        $commande1->setMethodePaiem('Carte de crédit');
        $commande1->setCommandePaiem('P12345');
        $commande1->setAdrFactUtil('1 rue de Paris, 75000 Paris');
        $commande1->setAdrLivrUtil('15 rue de Lyon, 69000 Lyon');
        $commande1->setFraisExpComm('15.00');
        $commande1->setPaysComm('France');
        $commande1->setIdUtil('1');
        $manager-> persist($commande1);

        // Commande 2

        $commande2 = new Commande();
        $commande2->setDateComm(new \DateTime('2025-01-18'));
        $commande2->setDateLivrComm(new \DateTime('2025-01-25'));
        $commande2->setPrixTotalComm('1200.00');
        $commande2->setPrixUnitComm('400.00');
        $commande2->setLibelleComm('Piano numérique');
        $commande2->setStatutComm('Livrée');
        $commande2->setUtilComm('Martin Sophie');
        $commande2->setSousTotalComm('1100.00');
        $commande2->setFdp('100.00');
        $commande2->setMontantPaiem('1200.00');
        $commande2->setDatePaiem(new \DateTime('2025-01-19'));
        $commande2->setStatutPaiem('Validée');
        $commande2->setMethodePaiem('Virement bancaire');
        $commande2->setCommandePaiem('P12346');
        $commande2->setAdrFactUtil('22 avenue des Champs, 75008 Paris');
        $commande2->setAdrLivrUtil('22 avenue des Champs, 75008 Paris');
        $commande2->setFraisExpComm('30.00');
        $commande2->setPaysComm('France');
        $commande2->setIdUtil('2');
        $manager-> persist($commande2);

        // Commande 3

        // Commande 4

        // Commande 5

        // Commande 6

        // Commande 7

        // Commande 8

        // Commande 9

        // Commande 10

        // Commande 11

        // Commande 12

        // Commande 13



        $manager->flush();
    }
}
