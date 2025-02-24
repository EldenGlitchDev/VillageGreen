<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Categorie;
use App\Entity\SousCategorie;

class Jeu1CatSousCat extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $donneesCategories=[
            ['Instruments à cordes', 'instruments_a_cordesCat.jpg', 1],
            ['Instruments à vent', 'instruments_a_ventCat.png', 5],
            ['Instruments à percussion', 'instruments_a_percussionCat.jpg', 9],
            ['Claviers et pianos', 'claviers_pianosCat.png', 13],
            ['Instruments de musique électronique', 'instruments_musique_electroniqueCat.png', 16],
            ['Instruments traditionnels', 'instruments_tradiCat.png', 19],
            ['Accessoires', 'accessoiresCat.png', 23],
            ['Equipement audio et enregistrement', 'equipements_audio_enregistrementCat.png', 28],
        ];

        foreach ($donneesCategories as [$nomCat, $imageCat, $idSousCat]) {
        
        $categories = new Categorie();
        
        $categories->setNomCat($nomCat)
                   ->setImageCat($imageCat)
                   ->setIdSousCat($idSousCat);
        $manager -> persist($categories);
        }

        $donneesSousCategories=[

            /*Instruments à cordes*/

            ['Guitares acoustiques', 'corde_acoustique_SousCat.jpg'],
            ['Guitares électriques', 'corde_electrique_SousCat.jpg'],
            ['Violons', 'corde_violon_SousCat.png'],
            ['Basses', 'corde_basse_SousCat.jpg'],

            /*Instruments à vents*/

            ['Flûtes', 'vent_flute_SousCat.png'],
            ['Clarinettes', 'vent_clarinette_SousCat.png'],
            ['Saxophones', 'vent_saxophone_SousCat.png'],
            ['Trompettes', 'vent_trompette_SousCat.png'],

            /*Instruments à percussion*/

            ['Batteries', 'batterie_SousCat.png'],
            ['Tambours', 'tambour_SousCat.png'],
            ['Cymbales', 'cymbale_SousCat.png'],
            ['Bongos', 'bongo_SousCat.png'],

            /*Claviers et pianos*/

            ['Pianos acoustiques', 'piano_acoustique_SousCat.png'],
            ['Claviers électroniques', 'clavier_electronique_SousCat.png'],
            ['Orgues', 'orgue_SousCat.png'],

            /*Instruments de musique électronique*/

            ['Synthétiseurs', 'synthetiseur_SousCat.png'],
            ['Boîtes à rythmes', 'boite_a_rythme_SousCat.png'],
            ['Effets', 'effet_SousCat.png'],

            /*Instruments tradditionnels*/

            ['Didgeridoos', 'didgeridoo_SousCat.png'],
            ['Shamisen', 'shamisen_SousCat.png'],
            [ 'Sitar', 'sitar_SousCat.png'],
            ['Marimba', 'marimba_SousCat.png'],

            /*Accessoires*/

            ['Cordes', 'accessoires_cordes_SousCat.png'],
            ['Médiators', 'accessoires_mediators_SousCat.png'],
            ['Baguettes', 'accessoires_baguettes_SousCat.png'],
            ['Accordeurs', 'accessoires_accordeur_SousCat.png'],
            ['Housses', 'accessoires_housse_SousCat.png'],

            /*Equipement audio et enregistrement*/

            ['Casques', 'casque_SousCat.png'],
            ['Micros', 'micro_SousCat.jpg'],
            ['Interfaces audio', 'interface_audio_SousCat.png'],
            ['Enceintes', 'enceinte_SousCat.png'],
        ];

        foreach ($donneesSousCategories as [$nomSousCat, $imageSousCat]) {

            $sousCategories = new SousCategorie();

            $sousCategories->setNomSousCat($nomSousCat)
                           ->setImageSousCat($imageSousCat);

            $manager->persist($sousCategories);

        }



        $manager->flush();
    }
}
