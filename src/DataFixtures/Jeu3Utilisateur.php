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

            ['de Saint-Florent', 'Théodore', '', 'theodore.saintflorent@mail.com', '0678954860', 'Administrateur', 'ROLE_ADMIN', 'admin'],

        /*Particuliers*/
            ['Dupont', 'Pierre', '', 'pierre.dupont@mail.com', '0612345678', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Martin', 'Sophie', '', 'sophie.martin@mail.com', '0623456789', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Bernard', 'Alain', '', 'alain.bernard@mail.com', '0634567890', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Lefevre', 'Claire', '', 'claire.lefevre@mail.com', '0645678901', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Girad', 'Marc', '', 'marc.girard@mail.com', '0656789012', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Durand', 'Elise', '', 'elise.durand@mail.com', '0678901234', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Moreau', 'Thomas', '', 'thomas.moreau@mail.com', '0689012345', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Lefevre', 'Chloe', '', 'chloe.lefevre@mail.com', '0690123456', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Petit', 'Jean', '', 'jean.petit@mail.com', '0611122334', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Faure', 'Isabelle', '', 'isabelle.faure@mail.com', '0622233445', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Leroy', 'Gabriel', '', 'gabriel.leroy@mail.com', '0633344556', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Robert', 'Helene', '', 'helene.robert@mail.com', '0644455667', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Boucher', 'Luc', '', 'luc.boucher@mail.com', '0655566778', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Lefevre', 'Nicolas', '', 'nicolas.lefevre@mail.com', '0666677889', 'Particulier', 'ROLE_USER', 'lambda123'],
            ['Martin', 'Aurelie', '', 'aurelie.martin@mail.com', '0677888990', 'Particulier', 'ROLE_USER', 'lambda123'],

        /*Professionnels*/
            ['Dupuis', 'Alice', '123456789', 'alice.dupuis@pro.com', '0701234567', 'Professionnel', 'ROLE_USER', 'pro123'],
            ['Lemoine', 'Bernard', '987654321', 'bernard.lemoine@pro.com', '0712345678', 'Professionnel', 'ROLE_USER', 'pro123'],
            ['Marchand', 'Lucie', '192837465', 'lucie.marchand@pro.com', '0723456789', 'Professionnel', 'ROLE_USER', 'pro123'],
            ['Aubert', 'Francois', '112233445', 'francois.aubert@pro.com', '0734567890', 'Professionnel', 'ROLE_USER', 'pro123'],
            ['Lefevre', 'Stephanie', '223344556', 'stephanie.lefevre@pro.com', '0745678901', 'Professionnel', 'ROLE_USER', 'pro123'],
        ];

        foreach ($donneesUtlisateur as [$nomUtil, $prenomUtil, $siren, $mailUtil, $numTelUtil, $typeUtil, $role, $mdpUtil]) {

            $utilisateur = new Utilisateur();

            $utilisateur->setNomUtil($nomUtil)
                        ->setPrenomUtil($prenomUtil)
                        ->setSiren($siren)
                        ->setEmail($mailUtil)
                        ->setNumTelUtil($numTelUtil)
                        ->setTypeUtil($typeUtil)
                        ->setRoles([$role]);
                        
                        
                        $hashedPassword = $this->passwordHasher->hashPassword($utilisateur, $mdpUtil);
                        $utilisateur->setPassword($hashedPassword);
                        
                        $manager->persist($utilisateur);
        };

        $manager->flush();
    }
}
