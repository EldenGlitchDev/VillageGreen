<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;

class Jeu2Articles extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        $donneesArticles=[
            
            /*Instruments à cordes*/

            ['Instrument à cordes', 'Guitare acoustique', 'Cordes de rechange, médiators', 150.00, 'Yamaha', 'Guitare acoustique parfaite pour les débutants et intermédiaires, sonorité chaleureuse.', 20, 'guitare_acoustique_yamaha.jpg', 2, 25, 1, 'C1'],
            ['Instrument à cordes', 'Violon électrique', 'Archet, étui rigide', 250.00, 'Stagg', 'Violon électrique avec une sonorité claire et un design moderne, idéal pour les musiciens sur scène.', 15, 'violon_Stagg.png', 2, 0, 2, 'C1'],
            ['Instrument à cordes', 'Basse électrique', 'Housse de transport, câbles', 400.00, 'Fender', 'Basse électrique de qualité professionnelle, idéale pour un jeu de basse puissant et précis.', 10, 'basse_fender.jpg', 2, 0, 1, 'C1'],

            /*Instruments à vents*/

            ['Instrument à vent', 'Saxophone alto', 'Anches, étui', 600.00, 'Selmer', 'Saxophone alto avec une excellente projection sonore et une grande durabilité.', 8, 'saxophone_selmer.png', 2, 0, 5, 'C2'],
            ['Instrument à vent', 'Flûte traversière', 'Cahier d\'exercices, huile pour clé', 250.00, 'Yamaha', 'Flûte traversière professionnelle avec un son clair et une réponse rapide.', 12, 'flutte_traversiere_yamaha.png', 2, 0, 4, 'C2'],
            ['Instrument à vent', 'Trompette', 'Embouchure de rechange, huile', 400.00, 'Bach', 'Trompette de haute qualité avec un son brillant, idéale pour les orchestres et les musiciens solo.', 10, 'trompette_bach.png', 2, 5, 1, 'C2'],

            /*Instruments à percussion*/

            ['Instrument à percussion', 'Batterie électronique', 'Pédale, cymbales', 800.00, 'Roland', 'Batterie électronique avec des sons réalistes et une réponse rapide, idéale pour la pratique à domicile.', 6, 'batterie_electronique_roland(percussion).png', 2, 0, 2, 'C3'],
            ['Instrument à percussion', 'Cajón', 'Housse de transport', 120.00, 'Meinl', 'Cajón acoustique de qualité supérieure, parfait pour les performances en solo ou en groupe.', 14, 'cajon_meinl.jpg', 2, 0, 5, 'C3'],
            ['Instrument à percussion', 'Congas', 'Paires de balais, huile pour peau', 300.00, 'LP', 'Congas avec une sonorité riche et profonde, utilisées dans divers styles musicaux latins.', 7, 'congas_LP.png', 2, 0, 4, 'C3'],

            /*Claviers et pianos*/

            ['Clavier et piano', 'Piano numérique', 'Pédale de sustain, banc', 450.00, 'Roland', 'Piano numérique avec 88 touches, idéal pour les pianistes débutants et intermédiaires.', 20, 'piano_numerique_roland.png', 2, 0, 4, 'C4'],
            ['Clavier et piano', 'Clavier MIDI', 'Câble USB', 120.00, 'Akai', 'Clavier MIDI compact avec des touches sensibles à la vélocité, parfait pour la production musicale.', 30, 'clavier_midi_akai.png', 2, 50, 3, 'C4'],
            ['Clavier et piano', 'Piano droit', 'Banquette, étouffoir', 2000.00, 'Yamaha', 'Piano droit acoustique avec une sonorité riche et une mécanique performante.', 5, 'piano_droit_yamaha.png', 2, 0, 1, 'C4'],

            /*Instruments de musique électronique*/

            ['Instrument de musique électronique', 'Synthétiseur analogique', 'Alimentation, câble MIDI', 350.00, 'Korg', 'Synthétiseur analogique offrant des sonorités chaudes et riches pour les musiciens électroniques.', 15, 'synthetiseur_analogique_korg.png', 2, 0, 4, 'C5'],
            ['Instrument de musique électronique', 'Batterie électronique', 'Pédale de grosse caisse, câbles', 800.00, 'Roland', 'Batterie électronique avec des pads sensibles et des sons de percussion réalistes, idéale pour les performances live.', 10, 'batterie_electronique_roland(musique_electronique).png', 2, 0, 3, 'C5'],
            ['Instrument de musique électronique', 'Guitare MIDI', 'Câble USB, plectres', 400.00, 'Roland', 'Guitare MIDI permettant de jouer une large gamme de sons synthétiques, avec une interface fluide pour les musiciens.', 5, 'guitare_midi_roland.png', 2, 0, 5, 'C5'],

            /*Instruments traditionnels*/

            ['Instrument traditionnel', 'Sitar', 'Housse de protection', 500.00, 'Ravi', 'Sitar de qualité artisanale avec un son authentique pour les musiciens expérimentés.', 4, 'sitar_ravi.png', 2, 0, 2, 'C6'],
            ['Instrument traditionnel', 'Djembe', 'Housse, balais', 150.00, 'Meinl', 'Djembe en bois avec une peau de qualité, idéal pour les concerts et les sessions de percussion.', 12, 'djembe_meinl.png', 2, 10, 5, 'C6'],
            ['Instrument traditionnel', 'Shamisen', 'Cordes de rechange', 250.00, 'Koto Shop', 'Shamisen japonais traditionnel avec une sonorité distincte et une grande capacité d\'expression.', 6, 'shamisen_koto.png', 2, 0, 2, 'C6'],

            /*Accessoires*/

            ['Accessoire', 'Médiators', 'Lot de 6', 5.00, 'Dunlop', 'Médiators en plastique dur, idéal pour les instruments à cordes.', 50, 'mediators_dunlop.png', 2, 0, 1, 'C7'],
            ['Accessoire', 'Câble audio', 'Câble Jack 3m', 10.00, 'Hosa', 'Câble audio de qualité professionnelle, avec connecteurs plaqués or pour une transmission de signal optimale.', 100, 'cables_audio_hosa.png', 2, 0, 1, 'C7'],
            ['Accessoire', 'Housse de transport', 'Pour guitare', 30.00, 'Ibanez', 'Housse de transport robuste et légère, offrant une protection optimale pour vos instruments.', 40, 'housse_guitare_ibanez.png', 2, 10, 5, 'C7'],

            /*Equipement audio et enregistrement*/
            
            ['Équipement audio et enregistrement', 'Interface audio USB', 'Câble USB, logiciel d\'enregistrement', 120.00, 'Focusrite', 'Interface audio USB 2 canaux, idéale pour l\'enregistrement de musique à domicile.', 30, 'interface_audio_usb_focusrite.png', 2, 0, 4, 'C8'],
            ['Équipement audio et enregistrement', 'Enregistreur portable', 'Carte mémoire, trépied', 200.00, 'Zoom', 'Enregistreur portable avec une qualité d\'enregistrement haute résolution, parfait pour les podcasts et les prises de son sur le terrain.', 20, 'enregistreur_portable_zoom.png', 2, 0, 4, 'C8'],
            ['Équipement audio et enregistrement', 'Moniteurs de studio', 'Câbles d\'alimentation, supports', 350.00, 'Yamaha', 'Moniteurs de studio avec un son clair et précis, parfaits pour le mixage et l\'enregistrement.', 15, 'moniteurs_de_studio_yamaha.jpg', 2, 0, 2, 'C8'],

        ];

        foreach ($donneesArticles as [$typeArt, $nomArt, $accessoireArt, $prixArt, $marqueArt, $descrArt, $quStockArt, $photoArt, $garantieArt, $promoArt, $idFourni, $idCat]) {

        $articles = new Article();

        $articles->setTypeArt($typeArt)
                 ->setNomArt($nomArt)
                 ->setAccessoireArt($accessoireArt)
                 ->setPrixArt($prixArt)
                 ->setMarqueArt($marqueArt)
                 ->setDescrArt($descrArt)
                 ->setQuStockArt($quStockArt)
                 ->setPhotoArt($photoArt)
                 ->setGarantieArt($garantieArt)
                 ->setPromoArt($promoArt)
                 ->setIdFourni($idFourni)
                 ->setIdCat($idCat);
        $manager->persist($articles);
        }

        $manager->flush();
    }
}
