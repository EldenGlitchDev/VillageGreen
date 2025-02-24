<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Commande;

class Jeu5Commande extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $donneesCommandes=[
            ['2025-01-15', '2025-01-20', 300.00, 150.00, 'Guitare acoustique', 'En cours', 'Dupont Pierre', 275.00, 25.00, 300.00, '2025-01-15', 'Validée', 'Carte de crédit', 
            'P12345', '1 rue de Paris, 75000 Paris', '15 rue de Lyon, 69000 Lyon', 15.00, 'France', 1],
            ['2025-01-18', '2025-01-25', 1200.00, 400.00, 'Piano numérique', 'Livrée', 'Martin Sophie', 1100.00, 100.00, 1200.00, '2025-01-19', 'Validée', 'Virement bancaire',
            'P12346', '22 avenue des Champs, 75008 Paris', '22 avenue des Champs, 75008 Paris', 30.00, 'France', 2],
            ['2025-01-20', '2025-01-22', 450.00, 225.00, 'Violon électrique', 'Annulée', 'Bernard Alain', 425.00, 25.00, 450.00, '2025-01-21', 'Annulée', 'Espèces',
            'P12347', '10 rue de la Gare, 59000 Lille', '10 rue de la Gare, 59000 Lille', 20.00, 'France', 3],
            ['2025-01-22', '2025-01-28', 550.00, 275.00, 'Batterie électronique', 'Expédiée', 'Lefevre Claire', 500.00, 50.00, 550.00, '2025-01-22', 'Validée', 'Carte de crédit',
            'P12348', '33 rue de la République, 33000 Bordeaux', '33 rue de la République, 33000 Bordeaux', 25.00, 'France', 4],
            ['2025-01-25', '2025-01-30', 220.00, 110.00, 'Saxophone alto', 'En cours', 'Girad Marc', 200.00, 20.00, 220.00, '2025-01-25', 'En attente', 'Paypal',
            'P12349', '47 rue du Soleil, 13000 Marseille', '47 rue du Soleil, 13000 Marseille', 18.00, 'France', 5],
            ['2025-01-28', '2025-02-02', 1300.00, 650.00, 'Basse électrique', 'Livrée', 'Durand Elise', 1200.00, 100.00, 1300.00, '2025-01-28', 'Validée', 'Virement bancaire',
            'P12350', '12 rue de l\'Eglise, 75012 Paris', '12 rue de l\'Eglise, 75012 Paris', 35.00, 'France', 6],
            ['2025-01-30', '2025-02-05', 350.00, 175.00, 'Congas', 'En attente', 'Moreau Thomas', 325.00, 25.00, 350.00, '2025-01-30', 'En attente', 'Carte de crédit',
            'P12351', '28 rue des Fleurs, 44000 Nantes', '28 rue des Fleurs, 44000 Nantes', 10.00, 'France', 7],
            ['2025-01-18', '2025-01-23', 800.00, 400.00, 'Interface audio USB', 'Livrée', 'Lefevre Chloe', 750.00, 50.00, 800.00, '2025-01-18', 'Validée', 'Chèque',
            'P12352', '56 rue de la Montagne, 69005 Lyon', '56 rue de la Montagne, 69005 Lyon', 20.00, 'France', 8],
            ['2025-01-19', '2025-01-24', 1000.00, 500.00, 'Flûte traversière', 'Expédiée', 'Petit Jean', 950.00, 50.00, 1000.00, '2025-01-19', 'Validée', 'Carte de crédit',
            'P12353', '78 boulevard de la Liberté, 21000 Dijon', '78 boulevard de la Liberté, 21000 Dijon', 22.00, 'France', 9],
            ['2025-01-15', '2025-01-22', 650.00, 325.00, 'Trompette', 'Livrée', 'Faure Isabelle', 600.00, 50.00, 650.00, '2025-01-15', 'Validée', 'Espèces',
            'P12354', '90 rue des Lilas, 35000 Rennes', '90 rue des Lilas, 35000 Rennes', 15.00, 'France', 10],
            ['2025-01-17', '2025-01-21', 450.00, 225.00, 'Djembe', 'Livrée', 'Dupuis Alice', 425.00, 25.00, 450.00, '2025-01-17', 'Validée', 'Carte de crédit',
            'P12355', '34 rue de l\'Arche, 75006 Paris', '34 rue de l\'Arche, 75006 Paris', 10.00, 'France', 16],
            ['2025-01-20', '2025-01-24', 550.00, 275.00, 'Housse de transport', 'Expédiée', 'Lemoine Bernard', 500.00, 50.00, 550.00, '2025-01-20', 'Validée', 'Virement bancaire',
            'P12356', '12 rue de la Croix, 31000 Toulouse', '12 rue de la Croix, 31000 Toulouse', 12.00, 'France', 17],
            ['2025-01-22', '2025-01-30', 250.00, 125.00, 'Câble audio', 'Annulée', 'Marchand Lucie', 225.00, 25.00, 250.00, '2025-01-22', 'Annulée', 'Paypal', 
            'P12357', '18 avenue des Vignes, 75019 Paris', '18 avenue des Vignes, 75019 Paris', 10.00, 'France', 18],
        ];

        foreach ($donneesCommandes as [$dateComm, $dateLivrComm, $prixTotalComm, $prixUnitComm, $libelleComm, $statutComm, 
                $utilComm, $sousTotalComm, $fdp, $montantPaiem, $datePaiem, $statutPaiem, $methodePaiem, 
                $commandePaieme, $adrFactUtil, $adrLivrUtil, $fraisExpComm, $paysComm, $idUtil]) {

                    $commandes = new Commande();

                    $dateCommDate = new \DateTime($dateComm);
                    $dateLivrCommDate = new \DateTime($dateLivrComm);
                    $datePaiemDate = new \DateTime($datePaiem);

                    $commandes->setDateComm($dateCommDate)
                              ->setDateLivrComm($dateLivrCommDate)
                              ->setPrixTotalComm($prixTotalComm)
                              ->setPrixUnitComm($prixUnitComm)
                              ->setLibelleComm($libelleComm)
                              ->setStatutComm($statutComm)
                              ->setUtilComm($utilComm)
                              ->setSousTotalComm($sousTotalComm)
                              ->setFdp($fdp)
                              ->setMontantPaiem($montantPaiem)
                              ->setDatePaiem($datePaiemDate)
                              ->setStatutPaiem($statutPaiem)
                              ->setMethodePaiem($methodePaiem)
                              ->setCommandePaiem($commandePaieme)
                              ->setAdrFactUtil($adrFactUtil)
                              ->setAdrLivrUtil($adrLivrUtil)
                              ->setFraisExpComm($fraisExpComm)
                              ->setPaysComm($paysComm)
                              ->setIdUtil($idUtil);
                              $manager->persist($commandes);
                              }

        $manager->flush();

        
    }
}
