<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Utilisateur;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class Jeu3Utilisateur extends Fixture
{

private UserPasswordHasherInterface $passwordHasher;

public function __construct(UserPasswordHasherInterface $passwordHasher)
{
    $this->passwordHasher = $passwordHasher;
}

    public function load(ObjectManager $manager): void
    {
        $donneesUtlisateur=[

            /*Administrateur*/
                ['de Saint-Florent', 'Théodore', '', 'theodore.saintflorent@mail.com', '0678954860', 'Administrateur', 'admin1234', '80', '15 rue de Lyon', '69000', 'Lyon', 'France'],
            /*Particuliers*/
                ['Dupont', 'Pierre', '', 'pierre.dupont@mail.com', '0612345678', 'Particulier', 'lambda123', '0', '15 rue de Lyon', '69000', 'Lyon', 'France'],
                ['Martin', 'Sophie', '', 'sophie.martin@mail.com', '0623456789', 'Particulier', 'lambda123', '0', '22 avenue des Champs', '75008', 'Paris', 'France'],
                ['Bernard', 'Alain', '', 'alain.bernard@mail.com', '0634567890', 'Particulier', 'lambda123', '10', '10 rue de la Gare', '59000', 'Lille', 'France'],
                ['Lefevre', 'Claire', '', 'claire.lefevre@mail.com', '0645678901', 'Particulier', 'lambda123', '0', '33 rue de la République', '33000', 'Bordeaux', 'France'],
                ['Girad', 'Marc', '', 'marc.girard@mail.com', '0656789012', 'Particulier', 'lambda123', '0', '47 rue du Soleil', '13000', 'Marseille', 'France'],
                ['Durand', 'Elise', '', 'elise.durand@mail.com', '0678901234', 'Particulier', 'lambda123', '0', '12 rue de l\'Eglise', '75012', 'Paris', 'France'],
                ['Moreau', 'Thomas', '', 'thomas.moreau@mail.com', '0689012345', 'Particulier', 'lambda123', '5', '28 rue des Fleurs', '44000', 'Nantes', 'France'],
                ['Lefevre', 'Chloe', '', 'chloe.lefevre@mail.com', '0690123456', 'Particulier', 'lambda123', '10', '56 rue de la Montagne', '69005', 'Lyon', 'France'],
                ['Petit', 'Jean', '', 'jean.petit@mail.com', '0611122334', 'Particulier', 'lambda123', '0', '78 boulevard de la Liberté', '21000', 'Dijon', 'France'],
                ['Faure', 'Isabelle', '', 'isabelle.faure@mail.com', '0622233445', 'Particulier', 'lambda123', '0', '90 rue des Lilas', '35000', 'Rennes', 'France'],
                ['Leroy', 'Gabriel', '', 'gabriel.leroy@mail.com', '0633344556', 'Particulier', 'lambda123', '0', '123 Rue des Lilas', '75010', 'Paris', 'France'],
                ['Robert', 'Helene', '', 'helene.robert@mail.com', '0644455667', 'Particulier', 'lambda123', '20', '45 Boulevard de la liberté', '13001', 'Marseille', 'France'],
                ['Boucher', 'Luc', '', 'luc.boucher@mail.com', '0655566778', 'Particulier', 'lambda123', '40', '78 Avenue des Champs-Elysees', '75008', 'Paris', 'France'],
                ['Lefevre', 'Nicolas', '', 'nicolas.lefevre@mail.com', '0666677889', 'Particulier', 'lambda123', '30', '56 Rue de la République', '69002', 'Lyon', 'France'],
                ['Martin', 'Aurelie', '', 'aurelie.martin@mail.com', '0677888990', 'Particulier', 'lambda123', '20', '12 Place du Marché', '37000', 'Tours', 'France'],
            /*Professionnels*/
                ['Dupuis', 'Alice', '123456789', 'alice.dupuis@pro.com', '0701234567', 'Professionnel', 'pro123', '5', '34 rue de l\'Arche', '75006', 'Paris', 'France'],
                ['Lemoine', 'Bernard', '987654321', 'bernard.lemoine@pro.com', '0712345678', 'Professionnel', 'pro123', '0', '12 rue de la Croix', '31000', 'Toulouse', 'France'],
                ['Marchand', 'Lucie', '192837465', 'lucie.marchand@pro.com', '0723456789', 'Professionnel', 'pro123', '0', '18 avenue des Vignes', '75019', 'Paris', 'France'],
                ['Aubert', 'Francois', '112233445', 'francois.aubert@pro.com', '0734567890', 'Professionnel', 'pro123', '0', '89 Rue de la Gare', '59000', 'Lille', 'France'],
                ['Lefevre', 'Stephanie', '223344556', 'stephanie.lefevre@pro.com', '0745678901', 'Professionnel', 'pro123', '10', '34 Rue du Chateau', '21000', 'Dijon', 'France'],
        ];

        foreach ($donneesUtlisateur as [$nomUtil, $prenomUtil, $siren, $mailUtil, $numTelUtil, $typeUtil, $role /*$mdpUtil*/, $promoUtil, $adrVoiePostal, $adrCodePostal, $adrVille, $adrPays]) {

            $utilisateur = new Utilisateur();

            $utilisateur->setNomUtil($nomUtil)
                        ->setPrenomUtil($prenomUtil)
                        ->setSiren($siren)
                        ->setEmail($mailUtil)
                        ->setNumTelUtil($numTelUtil)
                        ->setTypeUtil($typeUtil)
                        ->setRoles([$role])
                        ->setPromoUtil($promoUtil)
                        ->setAdrVoiePostUtil($adrVoiePostal)
                        ->setAdrCodePostUtil($adrCodePostal)
                        ->setAdrVilleUtil($adrVille)
                        ->setAdrPaysUtil($adrPays);
                        
                        
                        /*$hashedPassword = $this->passwordHasher->hashPassword($utilisateur, $mdpUtil);
                        $utilisateur->setPassword($hashedPassword);*/
                        
                        $manager->persist($utilisateur);
        };

        $manager->flush();
    }
}
