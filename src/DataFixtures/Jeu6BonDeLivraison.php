<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\BonDeLivraison;

class Jeu6BonDeLivraison extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $donneesBDL=[
            ['Bon1', 1001, '2025-01-15', '2025-01-20', '2025-01-19', 'Guitare acoustique', 1, '2025-01-20', '20%', 'Transport Standard', 25.00, 5.00, 10.00, '15 rue de Lyon, 69000 Lyon', '69000', 'Lyon', 'France'],
            ['Bon2', 1002, '2025-01-18', '2025-01-25', '2025-01-24', 'Piano numérique', 3, '2025-01-25', '10%', 'Livraison Express', 100.00, 10.00, 15.00, '22 avenue des Champs', '75008', 'Paris', 'France'],
            ['Bon3', 1003, '2025-01-20', '2025-01-22', '2025-01-21', 'Violon électrique', 2, '2025-01-22', '18%', 'Transport Standard', 25.00, 5.00, 20.00, '10 rue de la Gare', '59000', 'Lille', 'France'],
            ['Bon4', 1004, '2025-01-22', '2025-01-28', '2025-01-27', 'Batterie électronique', 2, '2025-01-28', '5%', 'Livraison Gratuite', 50.00, 8.00, 5.00, '33 rue de la République', '33000', 'Bordeaux', 'France'],
            ['Bon5', 1005, '2025-01-25', '2025-01-30', '2025-01-29', 'Saxophone alto', 2, '2025-01-30', '12%', 'Transport Standard', 20.00, 4.00, 5.00, '47 rue du Soleil', '13000', 'Marseille', 'France'],
            ['Bon6', 1006, '2025-01-28', '2025-02-02', '2025-02-01', 'Basse électrique', 2, '2025-02-02', '15%', 'Livraison Gratuite', 100.00, 12.00, 15.00, '12 rue de l\'Eglise', '75012', 'Paris', 'France'],
            ['Bon7', 1007, '2025-01-30', '2025-02-05', '2025-02-04', 'Sitar', 2, '2025-02-05', '8%', 'Transport Express', 25.00, 6.00, 10.00, '28 rue des Fleurs', '44000', 'Nantes', 'France'],
            ['Bon8', 1008, '2025-01-18', '2025-01-23', '2025-01-22', 'Interface audio USB', 2, '2025-01-23', '20%', 'Livraison Gratuite', 50.00, 5.00, 10.00, '56 rue de la Montagne', '69005', 'Lyon', 'France'],
            ['Bon9', 1009, '2025-01-19', '2025-01-24', '2025-01-23', 'Flûte traversière', 2, '2025-01-24', '18%', 'Transport Standard', 50.00, 7.00, 12.00, '78 boulevard de la Liberté', '21000', 'Dijon', 'France'],
            ['Bon10', 1010, '2025-01-15', '2025-01-22', '2025-01-21', 'Trompette', 2, '2025-01-22', '10%', 'Livraison Gratuite', 50.00, 6.00, 8.00, '90 rue des Lilas', '35000', 'Rennes', 'France'],
            ['Bon11', 1011, '2025-01-17', '2025-01-21', '2025-01-20', 'Cymbales', 2, '2025-01-21', '5%', 'Transport Express', 25.00, 4.00, 6.00, '34 rue de l\'Arche', '75006', 'Paris', 'France'],
            ['Bon12', 1012, '2025-01-20', '2025-01-24', '2025-01-23', 'Médiators', 2, '2025-01-24', '12%', 'Livraison Gratuite', 50.00, 6.00, 10.00, '12 rue de la Croix', '31000', 'Toulouse', 'France'],
            ['Bon13', 1013, '2025-01-22', '2025-01-30', '2025-01-29', 'Enceinte', 2, '2025-01-30', '18%', 'Transport Standard', 125.00, 25.00, 3.00, '18 avenue des Vignes', '75019', 'Paris', 'France'],

        ];

        foreach ($donneesBDL as [$NomBon, $IDEntrBon, $DateCommBon, $DateExpBon, $DateLivrBon, $DetailProdBon, $QuBon, $DateFactBon, $NoTVABon, $DetailTransacBon, $FdpBon, $FraisConditioBon, $RemiseBon, $AdrVoiePostBon, $AdrCodePostBon, $AdrVilleBon, $AdrPaysComm]) {

            $bdl = new BonDeLivraison();

            $dateCommBonDateTime = new \DateTime($DateCommBon);
            $dateExpBonDateTime = new \DateTime($DateExpBon);
            $dateLivrBonDateTime = new \DateTime($DateLivrBon);
            $dateFactBonDateTime = new \DateTime($DateFactBon);

            $bdl->setNomBon($NomBon)
                ->setIdEntrBon($IDEntrBon)
                ->setDateCommBon($dateCommBonDateTime)
                ->setDateExpBon($dateExpBonDateTime)
                ->setDateLivrBon($dateLivrBonDateTime)
                ->setDetailProdBon($DetailProdBon)
                ->setQuBon($QuBon)
                ->setDateFactBon($dateFactBonDateTime)
                ->setNoTVABon($NoTVABon)
                ->setDetailTransacBon($DetailTransacBon)
                ->setFdpBon($FdpBon)
                ->setFraisConditioBon($FraisConditioBon)
                ->setRemiseBon($RemiseBon)
                ->setAdrVoiePostBon($AdrVoiePostBon)
                ->setAdrCodePostBon($AdrCodePostBon)
                ->setAdrVilleBon($AdrVilleBon)
                ->setAdrPaysComm($AdrPaysComm);

            $manager->persist($bdl);

        };

        $manager->flush();
    }
}
