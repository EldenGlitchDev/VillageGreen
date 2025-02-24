<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Avis;

class Jeu7Avis extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $donneesAvis=[
            [5, 'Super produit, je suis très satisfait de ma guitare acoustique ! Livraison rapide et service impeccable.', '2025-01-20', 1, 'Dupont Pierre', 1],
            [4, 'Le piano numérique est très bon, mais j\'ai eu quelques soucis avec la livraison. Sinon, rien à redire sur la qualité.', '2025-01-25', 2, 'Martin Sophie', 2],
            [3, 'Le violon électrique est correct, mais la qualité n\'est pas à la hauteur de mes attentes. Déçu par la finition.', '2025-01-22', 3, 'Bernard Alain', 3],
            [5, 'Batterie électronique reçue en parfait état. Très bonne qualité sonore, je recommande fortement !', '2025-01-27', 4, 'Lefevre Claire', 4],
            [4, 'Le saxophone alto est bien, mais la livraison a pris un peu plus de temps que prévu. Tout le reste était parfait.', '2025-01-30', 5, 'Girad Marc', 5],
            [1, 'Très déçue par la basse électrique. La qualité du son n\'est pas au niveau de mes attentes et il y a des grésillements dès que je branche l\'amplificateur. La livraison a également pris plus de temps que prévu.', '2025-02-01', 6, 'Durand Elise', 6],
        ];

        foreach ($donneesAvis as [$note, $commAvis, $dateAvis, $idInstru, $utilAvis, $idUtil]){

            $avis = new Avis();

            $dateAvisDateTime = new \DateTime($dateAvis);

            $avis->setNote($note)
                 ->setCommAvis($commAvis)
                 ->setDateAvis($dateAvisDateTime)
                 ->setIdInstru($idInstru)
                 ->setUtilAvis($utilAvis)
                 ->setIdUtil($idUtil);
            $manager->persist($avis);

        };

        $manager->flush();
    }
}
