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
            [1, 'Bon1', '1 rue de Paris, 75000 Paris', 1001, '2025-01-15', '2025-01-20', '2025-01-19', 'Guitare acoustique', 1, '2025-01-20', '20%', 'Transport Standard', 150.00, 25.00, 5.00, 30.00, 10.00, 215.00, 1],
            [2, 'Bon2', '22 avenue des Champs, 75008 Paris', 1002, '2025-01-18', '2025-01-25', '2025-01-24', 'Piano numérique', 3, '2025-01-25', '10%', 'Livraison Express', 400.00, 100.00, 10.00, 40.00, 15.00, 595.00, 2],
            [3, 'Bon3', '10 rue de la Gare, 59000 Lille', 1003, '2025-01-20', '2025-01-22', '2025-01-21', 'Violon électrique', 2, '2025-01-22', '18%', 'Transport Standard', 225.00, 25.00, 5.00, 40.00, 20.00, 315.00, 3],
            [4, 'Bon4', '33 rue de la République, 33000 Bordeaux', 1004, '2025-01-22', '2025-01-28', '2025-01-27', 'Batterie électronique', 2, '2025-01-28', '5%', 'Livraison Gratuite', 275.00, 50.00, 8.00, 15.00, 5.00, 418.00, 4],
            [5, 'Bon5', '47 rue du Soleil, 13000 Marseille', 1005, '2025-01-25', '2025-01-30', '2025-01-29', 'Saxophone alto', 2, '2025-01-30', '12%', 'Transport Standard', 110.00, 20.00, 4.00, 10.00, 5.00, 149.00, 5],
            [6, 'Bon6', '12 rue de l\'Eglise, 75012 Paris', 1006, '2025-01-28', '2025-02-02', '2025-02-01', 'Basse électrique', 2, '2025-02-02', '15%', 'Livraison Gratuite', 650.00, 100.00, 12.00, 40.00, 15.00, 900.00, 6],
            [7, 'Bon7', '28 rue des Fleurs, 44000 Nantes', 1007, '2025-01-30', '2025-02-05', '2025-02-04', 'Congas', 2, '2025-02-05', '8%', 'Transport Express', 175.00, 25.00, 6.00, 25.00, 10.00, 236.00, 7],
            [8, 'Bon8', '56 rue de la Montagne, 69005 Lyon', 1008, '2025-01-18', '2025-01-23', '2025-01-22', 'Interface audio USB', 2, '2025-01-23', '20%', 'Livraison Gratuite', 400.00, 50.00, 5.00, 20.00, 10.00, 485.00, 8],
            [9, 'Bon9', '78 boulevard de la Liberté, 21000 Dijon', 1009, '2025-01-19', '2025-01-24', '2025-01-23', 'Flûte traversière', 2, '2025-01-24', '18%', 'Transport Standard', 500.00, 50.00, 7.00, 45.00, 12.00, 614.00, 9],
            [10, 'Bon10', '90 rue des Lilas, 35000 Rennes', 1010, '2025-01-15', '2025-01-22', '2025-01-21', 'Trompette', 2, '2025-01-22', '10%', 'Livraison Gratuite', 325.00, 50.00, 6.00, 20.00, 8.00, 409.00, 10],
            [11, 'Bon11', '34 rue de l\'Arche, 75006 Paris', 1011, '2025-01-17', '2025-01-21', '2025-01-20', 'Djembe', 2, '2025-01-21', '5%', 'Transport Express', 225.00, 25.00, 4.00, 18.00, 6.00, 278.00, 11],
            [12, 'Bon12', '12 rue de la Croix, 31000 Toulouse', 1012, '2025-01-20', '2025-01-24', '2025-01-23', 'Housse de transport', 2, '2025-01-24', '12%', 'Livraison Gratuite', 275.00, 50.00, 6.00, 30.00, 10.00, 371.00, 12],
            [13, 'Bon13', '18 avenue des Vignes, 75019 Paris', 1013, '2025-01-22', '2025-01-30', '2025-01-29', 'Câble audio', 2, '2025-01-30', '18%', 'Transport Standard', 125.00, 25.00, 3.00, 18.00, 7.00, 173.00, 13],
        ];

        foreach ($donneesBDL as [$noFactBon, $nomBon, $adresseBon, $idEntrBon, $dateCommBon, $dateExpBon, $dateLivrBon, $detailProdBon, $quBon,
        $dateFactBon, $noTVABon, $detailTransacBon, $prixUnitHTVABon, $fdpBon, $fraisConditioBon, $tvaBon, $remiseBon, $totalHTVA_TTCBon, $idComm]) {

            $bdl = new BonDeLivraison();

            $dateCommBonDateTime = new \DateTime($dateCommBon);
            $dateExpBonDateTime = new \DateTime($dateExpBon);
            $dateLivrBonDateTime = new \DateTime($dateLivrBon);
            $dateFactBonDateTime = new \DateTime($dateFactBon);

            $bdl->setNoFactBon($noFactBon)
                ->setNomBon($nomBon)
                ->setAdresseBon($adresseBon)
                ->setIdEntrBon($idEntrBon)
                ->setDateCommBon($dateCommBonDateTime)
                ->setDateExpBon($dateExpBonDateTime)
                ->setDateLivrBon($dateLivrBonDateTime)
                ->setDetailProdBon($detailProdBon)
                ->setQuBon($quBon)
                ->setDateFactBon($dateFactBonDateTime)
                ->setNoTVABon($noTVABon)
                ->setDetailTransacBon($detailTransacBon)
                ->setPrixUnitHTVABon($prixUnitHTVABon)
                ->setFdpBon($fdpBon)
                ->setFraisConditioBon($fraisConditioBon)
                ->setTvaBon($tvaBon)
                ->setRemiseBon($remiseBon)
                ->setTotalHTVATTCBon($totalHTVA_TTCBon)
                ->setIdComm($idComm);
            $manager->persist($bdl);

        };

        $manager->flush();
    }
}
