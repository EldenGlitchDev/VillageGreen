<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
use App\Entity\Contenir;

class Jeu2Articles extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $donneesArticles=[
            
            ['Instrument à cordes', 'Guitare acoustique', 'Cordes de rechange, médiators', 'Yamaha', 'Guitare acoustique parfaite pour les débutants et intermédiaires, sonorité chaleureuse.', 'guitare_acoustique_yamaha.jpg', 2, 25, 150.00 ],
            ['Instrument à cordes', 'Violon électrique', 'Archet, étui rigide', 'Stagg', 'Violon électrique avec une sonorité claire et un design moderne, idéal pour les musiciens sur scène.', 'violon_Stagg.png', 2, 0, 225.00],
            ['Instrument à cordes', 'Basse électrique', 'Housse de transport, câbles', 'Fender', 'Basse électrique de qualité professionnelle, idéale pour un jeu de basse puissant et précis.', 'basse_fender.jpg', 2, 0, 650.00],

            /*Instruments à vent*/

            ['Instrument à vent', 'Saxophone alto', 'Anches, étui', 'Selmer', 'Saxophone alto avec une excellente projection sonore et une grande durabilité.', 'saxophone_selmer.png', 2, 0, 110.00],
            ['Instrument à vent', 'Flûte traversière', 'Cahier d\'exercices, huile pour clé', 'Yamaha', 'Flûte traversière professionnelle avec un son clair et une réponse rapide.', 'flutte_traversiere_yamaha.png', 2, 0, 500.00],
            ['Instrument à vent', 'Trompette', 'Embouchure de rechange, huile', 'Bach', 'Trompette de haute qualité avec un son brillant, idéale pour les orchestres et les musiciens solo.', 'trompette_bach.png', 2, 5, 325.00],

            /*Instruments à percussion*/

            ['Instrument à percussion', 'Batterie électronique', 'Pédale, cymbales', 'Roland', 'Batterie électronique avec des sons réalistes et une réponse rapide, idéale pour la pratique à domicile.', 'batterie_electronique_roland(percussion).png', 2, 0, 275.00],
            ['Instrument à percussion', 'Tambours', 'Mailloches, housse de transport', 'Meinl', 'Instrument de percussion offrant des sonorités puissantes et dynamiques, idéal pour la musique rythmique.', 'tambour_Meinl.png', 2, 0, 200.00],
            ['Instrument à percussion', 'Cymbales', 'Paires de balais, huile pour la peau', 'LP', 'Cymbales de haute qualité pour des sons clairs et percutants, parfaites pour la batterie ou les ensembles percussifs.', 'cymbales_LP.png', 2, 0, 500.00],

            /*Claviers et pianos*/

            ['Clavier et piano', 'Piano numérique', 'Pédale de sustain, banc', 'Roland', 'Piano numérique avec 88 touches, idéal pour les pianistes débutants et intermédiaires.', 'piano_numerique_roland.png', 2, 0, 400.00],
            ['Clavier et piano', 'Clavier MIDI', 'Câble USB', 'Akai', 'Clavier MIDI compact avec des touches sensibles à la vélocité, parfait pour la production musicale.', 'clavier_midi_akai.png', 2, 50, 600.00],
            ['Clavier et piano', 'Orgue', 'Banquette, étouffoir', 'Yamaha', 'Orgue électronique de haute qualité offrant une large palette de sons, idéal pour les musiciens classiques et modernes.', 'orgue_yamaha.png', 2, 0, 900.00],

            /*Instruments de musique électronique*/

            ['Instrument de musique électronique', 'Synthétiseur analogique', 'Alimentation, câble MIDI', 'Korg', 'Synthétiseur analogique offrant des sonorités chaudes et riches pour les musiciens électroniques.', 'synthetiseur_analogique_korg.png', 2, 0, 200.00],
            ['Instrument de musique électronique', 'Boîtes à rythme', 'Pédale de grosse caisse, câbles', 'Roland', 'Boîte à rythme électronique polyvalente, idéale pour créer des beats et des rythmes pour tout type de musique.', 'boite_a_rythme_roland.png', 2, 0, 300.00],
            ['Instrument de musique électronique', 'Otamatone', 'Câble USB, piles de rechange', 'Roland', 'Instrument électronique unique produisant des sons mélodiques et amusants, parfait pour les créateurs de musique expérimentale.', 'otamatone_roland.png', 2, 0, 350.00],

            /*Instruments traditionnels*/

            ['Instrument traditionnel', 'Sitar', 'Housse de protection', 'Ravi', 'Sitar de qualité artisanale avec un son authentique pour les musiciens expérimentés.', 'sitar_ravi.png', 2, 0, 170.00],
            ['Instrument traditionnel', 'Didgeridoo', 'Housse, cire pour didgeridoo', 'Meinl', 'Instrument traditionnel australien en bois, connu pour ses sonorités profondes et vibrantes.', 'didgeridoo_meinl.png', 2, 10 , 225.00],
            ['Instrument traditionnel', 'Shamisen', 'Cordes de rechange', 'Koto Shop', 'Shamisen japonais traditionnel avec une sonorité distincte et une grande capacité d\'expression.', 'shamisen_koto.png', 2, 0, 175.00],

            /*Accessoires*/

            ['Accessoire', 'Médiators', 'Lot de 6', 'Dunlop', 'Médiators en plastique dur, idéal pour les instruments à cordes.', 'mediators_dunlop.png', 2, 0, 50.00],
            ['Accessoire', 'Accordeurs', 'Accordeur clip', 'Hosa', 'Accordeur précis et facile à utiliser pour accorder tous types d\'instruments à cordes.', 'accordeur_hosa.png', 2, 0, 275.00],
            ['Accessoire', 'Baguettes', 'Baguettes pour batterie', 'Ibanez', 'Baguettes de batterie robustes, idéales pour un jeu précis et puissant.', 'baguettes_hosa.jpg', 2, 10, 50.00],

            /*Equipement audio et enregistrement*/

            ['Équipement audio et enregistrement', 'Interface audio USB', 'Câble USB, logiciel d\'enregistrement', 'Focusrite', 'Interface audio USB 2 canaux, idéale pour l\'enregistrement de musique à domicile.', 'interface_audio_usb_focusrite.png', 2, 0, 750.00],
            ['Équipement audio et enregistrement', 'Micro', 'Filtre anti-pop, support de microphone', 'Zoom', 'Microphone de haute qualité conçu pour l\'enregistrement et la captation sonore en studio ou en live.', 'micro_zoom.png', 2, 0, 90.00],
            ['Équipement audio et enregistrement', 'Enceinte', 'Câbles d\'alimentation, supports', 'Yamaha', 'Enceinte de haute qualité offrant un son clair et puissant, idéale pour les studios d\'enregistrement et les performances live.', 'enceinte_yamaha.png', 2, 0, 250.00],
        ];

        foreach ($donneesArticles as [$typeArt, $nomArt, $accessoireArt, $marqueArt, $descrArt, $photoArt, $garantieArt, $promoArt, $prixUnitHTVAArt]) {

        $articles = new Article();

        $articles->setTypeArt($typeArt)
                 ->setNomArt($nomArt)
                 ->setAccessoireArt($accessoireArt)
                 ->setMarqueArt($marqueArt)
                 ->setDescrArt($descrArt)
                 ->setPhotoArt($photoArt)
                 ->setGarantieArt($garantieArt)
                 ->setPromoArt($promoArt)
                 ->setPrixUnitHTVAArt($prixUnitHTVAArt);
        $manager->persist($articles);
        }

        $donneesContenir=[
            [150.00, 20],
            [250.00, 15],
            [400.00, 10],
            [600.00, 8],
            [250.00, 12],
            [400.00, 10],
            [800.00, 6],
            [300.00, 7],
            [450.00, 20],
            [500.00, 4],
            [5.00, 50],
            [120.00, 30],
            [350.00, 15],
        ];

        foreach ($donneesContenir as [$PrixArt, $QuStockArt])

        $contenir = new Contenir();

        $contenir->setPrixArt($PrixArt)
                 ->setQuStockArt($QuStockArt);
        $manager->persist($contenir);

        $manager->flush();
    }
}
