<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Commande;
use App\Entity\StatutCommande;
use App\Entity\StatutPaiement;

class Jeu5Commande extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $donneesCommandes=[
            ['2025-01-15', 'Guitare acoustique', 'Dupont Pierre', 25.00, 300.00, '2025-01-15', 'Carte de crédit', 'P12345', '1 rue de Paris, 75000 Paris', '15 rue de Lyon, 69000 Lyon', 15.00, 'France', '15 rue de Lyon', '69000', 'Lyon'],
            ['2025-01-18', 'Piano numérique', 'Martin Sophie', 100.00, 1200.00, '2025-01-19', 'Virement bancaire', 'P12346', '22 avenue des Champs, 75008 Paris', '22 avenue des Champs, 75008 Paris', 30.00, 'France', '22 avenue des Champs', '75008', 'Paris'],
            ['2025-01-20', 'Violon électrique', 'Bernard Alain', 25.00, 450.00, '2025-01-21', 'Espèces', 'P12347', '10 rue de la Gare, 59000 Lille', '10 rue de la Gare, 59000 Lille', 20.00, 'France', '10 rue de la Gare', '59000', 'Lille'],
            ['2025-01-22', 'Batterie électronique', 'Lefevre Claire', 50.00, 550.00, '2025-01-22', 'Carte de crédit', 'P12348', '33 rue de la République, 33000 Bordeaux', '33 rue de la République, 33000 Bordeaux', 25.00, 'France', '33 rue de la République', '33000', 'Bordeaux'],
            ['2025-01-25', 'Saxophone alto', 'Girad Marc', 20.00, 220.00, '2025-01-25', 'En attente', 'P12349', '47 rue du Soleil, 13000 Marseille', '47 rue du Soleil, 13000 Marseille', 18.00, 'France', '47 rue du Soleil', '13000', 'Marseille'],
            ['2025-01-28', 'Basse électrique', 'Durand Elise', 100.00, 1300.00, '2025-01-28', 'Virement bancaire', 'P12350', '12 rue de l\'Eglise, 75012 Paris', '12 rue de l\'Eglise, 75012 Paris', 35.00, 'France', '12 rue de l\'Eglise', '75012', 'Paris'],
            ['2025-01-30', 'Sitar', 'Moreau Thomas', 25.00, 350.00, '2025-01-30', 'Carte de crédit', 'P12351', '28 rue des Fleurs, 44000 Nantes', '28 rue des Fleurs, 44000 Nantes', 10.00, 'France', '28 rue des Fleurs', '44000', 'Nantes'],
            ['2025-01-18', 'Interface audio USB', 'Lefevre Chloe', 50.00, 800.00, '2025-01-18', 'Chèque', 'P12352', '56 rue de la Montagne, 69005 Lyon', '56 rue de la Montagne, 69005 Lyon', 20.00, 'France', '56 rue de la Montagne', '69005', 'Lyon'],
            ['2025-01-19', 'Flûte traversière', 'Petit Jean', 50.00, 1000.00, '2025-01-19', 'Carte de crédit', 'P12353', '78 boulevard de la Liberté, 21000 Dijon', '78 boulevard de la Liberté, 21000 Dijon', 22.00, 'France', '78 boulevard de la Liberté', '21000', 'Dijon'],
            ['2025-01-15', 'Trompette', 'Faure Isabelle', 50.00, 650.00, '2025-01-15', 'Espèces', 'P12354', '90 rue des Lilas, 35000 Rennes', '90 rue des Lilas, 35000 Rennes', 15.00, 'France', '90 rue des Lilas', '35000', 'Rennes'],
            ['2025-01-17', 'Cymbales', 'Dupuis Alice', 25.00, 450.00, '2025-01-17', 'Carte de crédit', 'P12355', '34 rue de l\'Arche, 75006 Paris', '34 rue de l\'Arche, 75006 Paris', 10.00, 'France', '34 rue de l\'Arche', '75006', 'Paris'],
            ['2025-01-20', 'Médiators', 'Lemoine Bernard', 50.00, 550.00, '2025-01-20', 'Virement bancaire', 'P12356', '12 rue de la Croix, 31000 Toulouse', '12 rue de la Croix, 31000 Toulouse', 12.00, 'France', '12 rue de la Croix', '31000', 'Toulouse'],
            ['2025-01-22', 'Enceinte', 'Marchand Lucie', 25.00, 250.00, '2025-01-22', 'Paypal', 'P12357', '18 avenue des Vignes, 75019 Paris', '18 avenue des Vignes, 75019 Paris', 10.00, 'France', '18 avenue des Vignes', '75019', 'Paris'],

        ];

        foreach ($donneesCommandes as [$DateComm, $LibelleComm, $UtilComm, $Fdp, $MontantPaiem, $DatePaiem, $MethodePaiem, $CommandePaiem, $AdrFactUtil, 
        $AdrLivrUtil, $FraisExpComm, $PaysComm, $AdrVoiePostComm, $AdrCodePostComm, $AdrVilleComm]) {

                    $commandes = new Commande();
                    $dateCommDateTime = new \DateTime($DateComm);
                    $datePaiemDateTime = new \DateTime($DatePaiem);

                    $commandes->setDateComm($dateCommDateTime)
                              ->setLibelleComm($LibelleComm)
                              ->setUtilComm($UtilComm)
                              ->setFdp($Fdp)
                              ->setMontantPaiem($MontantPaiem)
                              ->setDatePaiem($datePaiemDateTime)
                              ->setMethodePaiem($MethodePaiem)
                              ->setCommandePaiem($CommandePaiem)
                              ->setAdrFactUtil($AdrFactUtil)
                              ->setAdrLivrUtil($AdrLivrUtil)
                              ->setFraisExpComm($FraisExpComm)
                              ->setPaysComm($PaysComm)
                              ->setAdrVoiePostComm($AdrVoiePostComm)
                              ->setAdrCodePostComm($AdrCodePostComm)
                              ->setAdrVilleComm($AdrVilleComm);
                              $manager->persist($commandes);
        }


        $donneesStatutCommande=[
            ['En cours'],
            ['Livrée'],
            ['Annulée'],
            ['Expédiée'],
            ['En attente'],
        ];

        foreach ($donneesStatutCommande as [$StatutComm]) {
            $statutCommande = new StatutCommande();

            $statutCommande->setStatutComm($StatutComm);
        }
        
        $donneesStatutPaiement=[
            ['Validée'],
            ['Annulée'],
            ['En attente'],
        ];

        foreach ($donneesStatutPaiement as [$StatutPaiem]) {
            $statutPaiement = new StatutPaiement();

            $statutPaiement->setStatutPaiem($StatutPaiem);
        }

        $manager->flush();

        
    }
}
