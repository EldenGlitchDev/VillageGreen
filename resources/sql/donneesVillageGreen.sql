USE VillageGreen;

INSERT INTO `Sous_categorie` (`IDSousCat`, `NomSousCat`, `ImageSousCat`) VALUES
	('1', 'Guitares acoustiques', 'corde_acoustique_SousCat.jpg'),
	('2', 'Guitares électriques', 'corde_electrique_SousCat.jpg'),
	('3', 'Violons', 'corde_violon_SousCat.png'),
	('4', 'Basses', 'corde_basse_SousCat.jpg'),
	('5', 'Flûtes', 'vent_flute_SousCat.png'),
	('6', 'Clarinettes', 'vent_clarinette_SousCat.png'),
	('7', 'Saxophones', 'vent_saxophone_SousCat.png'),
	('8', 'Trompettes', 'vent_trompette_SousCat.png'),
	('9', 'Batteries', 'batterie_SousCat.png'),
	('10', 'Tambours', 'tambour_SousCat.png'),
	('11', 'Cymbales', 'cymbale_SousCat.png'),
	('12', 'Bongos', 'bongo_SousCat.png'),
	('13', 'Pianos acoustiques', 'piano_acoustique_SousCat.png'),
	('14', 'Claviers électroniques', 'clavier_electronique_SousCat.png'),
	('15', 'Orgues', 'orgue_SousCat.png'),
	('16', 'Synthétiseurs', 'synthetiseur_SousCat.png'),
	('17', 'Boîtes à rythmes', 'boite_a_rythme_SousCat.png'),
	('18', 'Effets', 'effet_SousCat.png'),
	('19', 'Didgeridoos', 'didgeridoo_SousCat.png'),
	('20', 'Shamisen', 'shamisen_SousCat.png'),
	('21', 'Sitar', 'sitar_SousCat.png'),
	('22', 'Marimba', 'marimba_SousCat.png'),
	('23', 'Cordes', 'accessoires_cordes_SousCat.png'),
	('24', 'Médiators', 'accessoires_mediators_SousCat.png'),
	('25', 'Baguettes', 'accessoires_baguettes_SousCat.png'),
	('26', 'Accordeurs', 'accessoires_accordeur_SousCat.png'),
	('27', 'Housses', 'accessoires_housse_SousCat.png'),
	('28', 'Casques', 'casque_SousCat.png'),
	('29', 'Micros', 'micro_SousCat.jpg'),
	('30', 'Interfaces audio', 'interface_audio_SousCat.png'),
	('31', 'Enceintes', 'enceinte_SousCat.png');

INSERT INTO `Categorie` (`IDCat`, `NomCat`, `ImageCat`, `IDSousCat`) VALUES
	('C1', 'Instruments à cordes', 'instruments_a_cordesCat.jpg', 1),
	('C2', 'Instruments à vent', 'instruments_a_ventCat.png', 5),
	('C3', 'Instruments à percussion', 'instruments_a_percussionCat.jpg', 9),
	('C4', 'Claviers et pianos', 'claviers_pianosCat.png', 13),
	('C5', 'Instruments de musique électronique', 'instruments_musique_electroniqueCat.png', 16),
	('C6', 'Instruments traditionnels', 'instruments_tradiCat.png', 19),
	('C7', 'Accessoires', 'accessoiresCat.png', 23),
	('C8', 'Equipement audio et enregistrement', 'equipements_audio_enregistrementCat.png', 28);

INSERT INTO `Utilisateur` (`IDUtil`, `NomUtil`, `PrenomUtil`, `Siren`, `MailUtil`, `NumTelUtil`, `TypeUtil`, `mdpUtil`) VALUES
	(1, 'Dupont', 'Pierre', '', 'pierre.dupont@mail.com', '0612345678', 'Particulier', 'lambda123'),
	(2, 'Martin', 'Sophie', '', 'sophie.martin@mail.com', '0623456789', 'Particulier', 'lambda123'),
	(3, 'Bernard', 'Alain', '', 'alain.bernard@mail.com', '0634567890', 'Particulier', 'lambda123'),
	(4, 'Lefevre', 'Claire', '', 'claire.lefevre@mail.com', '0645678901', 'Particulier', 'lambda123'),
	(5, 'Girad', 'Marc', '', 'marc.girard@mail.com', '0656789012', 'Particulier', 'lambda123'),
	(6, 'Durand', 'Elise', '', 'elise.durand@mail.com', '0678901234', 'Particulier', 'lambda123'),
	(7, 'Moreau', 'Thomas', '', 'thomas.moreau@mail.com', '0689012345', 'Particulier', 'lambda123'),
	(8, 'Lefevre', 'Chloe', '', 'chloe.lefevre@mail.com', '0690123456', 'Particulier', 'lambda123'),
	(9, 'Petit', 'Jean', '', 'jean.petit@mail.com', '0611122334', 'Particulier', 'lambda123'),
	(10, 'Faure', 'Isabelle', '', 'isabelle.faure@mail.com', '0622233445', 'Particulier', 'lambda123'),
	(11, 'Leroy', 'Gabriel', '', 'gabriel.leroy@mail.com', '0633344556', 'Particulier', 'lambda123'),
	(12, 'Robert', 'Helene', '', 'helene.robert@mail.com', '0644455667', 'Particulier', 'lambda123'),
	(13, 'Boucher', 'Luc', '', 'luc.boucher@mail.com', '0655566778', 'Particulier', 'lambda123'),
	(14, 'Lefevre', 'Nicolas', '', 'nicolas.lefevre@mail.com', '0666677889', 'Particulier', 'lambda123'),
	(15, 'Martin', 'Aurelie', '', 'aurelie.martin@mail.com', '0677888990', 'Particulier', 'lambda123'),
	(16, 'Dupuis', 'Alice', '123456789', 'alice.dupuis@pro.com', '0701234567', 'Professionnel', 'pro123'),
	(17, 'Lemoine', 'Bernard', '987654321', 'bernard.lemoine@pro.com', '0712345678', 'Professionnel', 'pro123'),
	(18, 'Marchand', 'Lucie', '192837465', 'lucie.marchand@pro.com', '0723456789', 'Professionnel', 'pro123'),
	(19, 'Aubert', 'Francois', '112233445', 'francois.aubert@pro.com', '0734567890', 'Professionnel', 'pro123'),
	(20, 'Lefevre', 'Stephanie', '223344556', 'stephanie.lefevre@pro.com', '0745678901', 'Professionnel', 'pro123');
	

INSERT INTO `Commande` (`IDComm`, `DateComm`, `DateLivrComm`, `PrixTotComm`, `PrixUnitComm`, `LibelleComm`, `StatutComm`, `UtilComm`, `SousTotalComm`, `Fdp`, `MontantPaiem`, `DatePaiem`, `StatutPaiem`, `MethodePaiem`, `CommandePaiem`, `AdrFactUtil`, `AdrLivrUtil`, `FraisExpComm`, `PaysComm`, `IDUtil`) VALUES
(1, '2025-01-15', '2025-01-20', 300.00, 150.00, 'Guitare acoustique', 'En cours', 'Dupont Pierre', 275.00, 25.00, 300.00, '2025-01-15', 'Validée', 'Carte de crédit', 'P12345', '1 rue de Paris, 75000 Paris', '15 rue de Lyon, 69000 Lyon', 15.00, 'France', 1),
(2, '2025-01-18', '2025-01-25', 1200.00, 400.00, 'Piano numérique', 'Livrée', 'Martin Sophie', 1100.00, 100.00, 1200.00, '2025-01-19', 'Validée', 'Virement bancaire', 'P12346', '22 avenue des Champs, 75008 Paris', '22 avenue des Champs, 75008 Paris', 30.00, 'France', 2),
(3, '2025-01-20', '2025-01-22', 450.00, 225.00, 'Violon électrique', 'Annulée', 'Bernard Alain', 425.00, 25.00, 450.00, '2025-01-21', 'Annulée', 'Espèces', 'P12347', '10 rue de la Gare, 59000 Lille', '10 rue de la Gare, 59000 Lille', 20.00, 'France', 3),
(4, '2025-01-22', '2025-01-28', 550.00, 275.00, 'Batterie électronique', 'Expédiée', 'Lefevre Claire', 500.00, 50.00, 550.00, '2025-01-22', 'Validée', 'Carte de crédit', 'P12348', '33 rue de la République, 33000 Bordeaux', '33 rue de la République, 33000 Bordeaux', 25.00, 'France', 4),
(5, '2025-01-25', '2025-01-30', 220.00, 110.00, 'Saxophone alto', 'En cours', 'Girad Marc', 200.00, 20.00, 220.00, '2025-01-25', 'En attente', 'Paypal', 'P12349', '47 rue du Soleil, 13000 Marseille', '47 rue du Soleil, 13000 Marseille', 18.00, 'France', 5),
(6, '2025-01-28', '2025-02-02', 1300.00, 650.00, 'Basse électrique', 'Livrée', 'Durand Elise', 1200.00, 100.00, 1300.00, '2025-01-28', 'Validée', 'Virement bancaire', 'P12350', '12 rue de l\'Eglise, 75012 Paris', '12 rue de l\'Eglise, 75012 Paris', 35.00, 'France', 6),
(7, '2025-01-30', '2025-02-05', 350.00, 175.00, 'Congas', 'En attente', 'Moreau Thomas', 325.00, 25.00, 350.00, '2025-01-30', 'En attente', 'Carte de crédit', 'P12351', '28 rue des Fleurs, 44000 Nantes', '28 rue des Fleurs, 44000 Nantes', 10.00, 'France', 7),
(8, '2025-01-18', '2025-01-23', 800.00, 400.00, 'Interface audio USB', 'Livrée', 'Lefevre Chloe', 750.00, 50.00, 800.00, '2025-01-18', 'Validée', 'Chèque', 'P12352', '56 rue de la Montagne, 69005 Lyon', '56 rue de la Montagne, 69005 Lyon', 20.00, 'France', 8),
(9, '2025-01-19', '2025-01-24', 1000.00, 500.00, 'Flûte traversière', 'Expédiée', 'Petit Jean', 950.00, 50.00, 1000.00, '2025-01-19', 'Validée', 'Carte de crédit', 'P12353', '78 boulevard de la Liberté, 21000 Dijon', '78 boulevard de la Liberté, 21000 Dijon', 22.00, 'France', 9),
(10, '2025-01-15', '2025-01-22', 650.00, 325.00, 'Trompette', 'Livrée', 'Faure Isabelle', 600.00, 50.00, 650.00, '2025-01-15', 'Validée', 'Espèces', 'P12354', '90 rue des Lilas, 35000 Rennes', '90 rue des Lilas, 35000 Rennes', 15.00, 'France', 10),
(11, '2025-01-17', '2025-01-21', 450.00, 225.00, 'Djembe', 'Livrée', 'Dupuis Alice', 425.00, 25.00, 450.00, '2025-01-17', 'Validée', 'Carte de crédit', 'P12355', '34 rue de l\'Arche, 75006 Paris', '34 rue de l\'Arche, 75006 Paris', 10.00, 'France', 16),
(12, '2025-01-20', '2025-01-24', 550.00, 275.00, 'Housse de transport', 'Expédiée', 'Lemoine Bernard', 500.00, 50.00, 550.00, '2025-01-20', 'Validée', 'Virement bancaire', 'P12356', '12 rue de la Croix, 31000 Toulouse', '12 rue de la Croix, 31000 Toulouse', 12.00, 'France', 17),
(13, '2025-01-22', '2025-01-30', 250.00, 125.00, 'Câble audio', 'Annulée', 'Marchand Lucie', 225.00, 25.00, 250.00, '2025-01-22', 'Annulée', 'Paypal', 'P12357', '18 avenue des Vignes, 75019 Paris', '18 avenue des Vignes, 75019 Paris', 10.00, 'France', 18);


INSERT INTO `Avis` (`IDAvis`, `Note`, `CommAvis`, `DateAvis`, `IDInstru`, `UtilAvis`, `IDUtil`) VALUES
(1, 5, 'Super produit, je suis très satisfait de ma guitare acoustique ! Livraison rapide et service impeccable.', '2025-01-20', 1, 'Dupont Pierre', 1),
(2, 4, 'Le piano numérique est très bon, mais j\'ai eu quelques soucis avec la livraison. Sinon, rien à redire sur la qualité.', '2025-01-25', 2, 'Martin Sophie', 2),
(3, 3, 'Le violon électrique est correct, mais la qualité n\'est pas à la hauteur de mes attentes. Déçu par la finition.', '2025-01-22', 3, 'Bernard Alain', 3),
(4, 5, 'Batterie électronique reçue en parfait état. Très bonne qualité sonore, je recommande fortement !', '2025-01-27', 4, 'Lefevre Claire', 4),
(5, 4, 'Le saxophone alto est bien, mais la livraison a pris un peu plus de temps que prévu. Tout le reste était parfait.', '2025-01-30', 5, 'Girad Marc', 5),
(7, 1, 'Très déçue par la basse électrique. La qualité du son n\'est pas au niveau de mes attentes et il y a des grésillements dès que je branche l\'amplificateur. La livraison a également pris plus de temps que prévu.', '2025-02-01', 6, 'Durand Elise', 6);

INSERT INTO `Bon_de_livraison` (`IDBon_de_livraison`, `NoFactBon`, `NomBon`, `AdresseBon`, `IDEntrBon`, `DateCommBon`, `DateExpBon`, `DateLivrBon`, `DetailProdBon`, `QuBon`, `DateFactBon`, `NoTVABon`, `DetailTransacBon`, `PrixUnitHTVABon`, `FdpBon`, `FraisConditioBon`, `TVABon`, `RemiseBon`, `TotalHTVA_TTCBon`, `IDComm`) VALUES
(1, 1, 'Bon1', '1 rue de Paris, 75000 Paris', 1001, '2025-01-15', '2025-01-20', '2025-01-19', 'Guitare acoustique', 1, '2025-01-20', '20%', 'Transport Standard', 150.00, 25.00, 5.00, 30.00, 10.00, 215.00, 1),
(2, 2, 'Bon2', '22 avenue des Champs, 75008 Paris', 1002, '2025-01-18', '2025-01-25', '2025-01-24', 'Piano numérique', 3, '2025-01-25', '10%', 'Livraison Express', 400.00, 100.00, 10.00, 40.00, 15.00, 595.00, 2),
(3, 3, 'Bon3', '10 rue de la Gare, 59000 Lille', 1003, '2025-01-20', '2025-01-22', '2025-01-21', 'Violon électrique', 2, '2025-01-22', '18%', 'Transport Standard', 225.00, 25.00, 5.00, 40.00, 20.00, 315.00, 3),
(4, 4, 'Bon4', '33 rue de la République, 33000 Bordeaux', 1004, '2025-01-22', '2025-01-28', '2025-01-27', 'Batterie électronique', 2, '2025-01-28', '5%', 'Livraison Gratuite', 275.00, 50.00, 8.00, 15.00, 5.00, 418.00, 4),
(5, 5, 'Bon5', '47 rue du Soleil, 13000 Marseille', 1005, '2025-01-25', '2025-01-30', '2025-01-29', 'Saxophone alto', 2, '2025-01-30', '12%', 'Transport Standard', 110.00, 20.00, 4.00, 10.00, 5.00, 149.00, 5),
(6, 6, 'Bon6', '12 rue de l_Eglise, 75012 Paris', 1006, '2025-01-28', '2025-02-02', '2025-02-01', 'Basse électrique', 2, '2025-02-02', '15%', 'Livraison Gratuite', 650.00, 100.00, 12.00, 40.00, 15.00, 900.00, 6),
(7, 7, 'Bon7', '28 rue des Fleurs, 44000 Nantes', 1007, '2025-01-30', '2025-02-05', '2025-02-04', 'Congas', 2, '2025-02-05', '8%', 'Transport Express', 175.00, 25.00, 6.00, 25.00, 10.00, 236.00, 7),
(8, 8, 'Bon8', '56 rue de la Montagne, 69005 Lyon', 1008, '2025-01-18', '2025-01-23', '2025-01-22', 'Interface audio USB', 2, '2025-01-23', '20%', 'Livraison Gratuite', 400.00, 50.00, 5.00, 20.00, 10.00, 485.00, 8),
(9, 9, 'Bon9', '78 boulevard de la Liberté, 21000 Dijon', 1009, '2025-01-19', '2025-01-24', '2025-01-23', 'Flûte traversière', 2, '2025-01-24', '18%', 'Transport Standard', 500.00, 50.00, 7.00, 45.00, 12.00, 614.00, 9),
(10, 10, 'Bon10', '90 rue des Lilas, 35000 Rennes', 1010, '2025-01-15', '2025-01-22', '2025-01-21', 'Trompette', 2, '2025-01-22', '10%', 'Livraison Gratuite', 325.00, 50.00, 6.00, 20.00, 8.00, 409.00, 10),
(11, 11, 'Bon11', '34 rue de l_Arche, 75006 Paris', 1011, '2025-01-17', '2025-01-21', '2025-01-20', 'Djembe', 2, '2025-01-21', '5%', 'Transport Express', 225.00, 25.00, 4.00, 18.00, 6.00, 278.00, 11),
(12, 12, 'Bon12', '12 rue de la Croix, 31000 Toulouse', 1012, '2025-01-20', '2025-01-24', '2025-01-23', 'Housse de transport', 2, '2025-01-24', '12%', 'Livraison Gratuite', 275.00, 50.00, 6.00, 30.00, 10.00, 371.00, 12),
(13, 13, 'Bon13', '18 avenue des Vignes, 75019 Paris', 1013, '2025-01-22', '2025-01-30', '2025-01-29', 'Câble audio', 2, '2025-01-30', '18%', 'Transport Standard', 125.00, 25.00, 3.00, 18.00, 7.00, 173.00, 13);

INSERT INTO `Fournisseur` (`IDFourni`, `NomFourni`, `MailFourni`, `AdresseFourni`, `TelFourni`) VALUES
(1, 'Yamaha', 'contact@yamaha.com', '1-1 Takamatsu-cho, Hamamatsu, Japon', '03 34 56 78 90'),
(2, 'Roland', 'contact@roland.com', '5-16-1, Takakura-cho, Shibuya-ku, Tokyo, Japon', '01 45 67 89 01'),
(3, 'Fender', 'contact@fender.com', '2199 South Street, Corona, CA, USA', '01 23 45 67 89'),
(4, 'Gibson', 'contact@gibson.com', '309 Plus Park Blvd, Nashville, TN, USA', '02 22 33 44 55'),
(5, 'Korg', 'contact@korg.com', '1-10-2 Nakano, Nakano-ku, Tokyo, Japon', '03 89 10 11 12');


INSERT INTO `Articles` (`IDart`, `TypeArt`, `NomArt`, `AccessoireArt`, `PrixArt`, `MarqueArt`, `DescrArt`, `QuStockArt`, `PhotoArt`, `GarantieArt`, `PromoArt`, `IDFourni`, `IDCat`) VALUES
(1, 'Instrument à cordes', 'Guitare acoustique', 'Cordes de rechange, médiators', 150.00, 'Yamaha', 'Guitare acoustique parfaite pour les débutants et intermédiaires, sonorité chaleureuse.', 20, 'guitare_acoustique_yamaha.jpg', 2, 25, 1, 'C1'),
(2, 'Instrument à cordes', 'Violon électrique', 'Archet, étui rigide', 250.00, 'Stagg', 'Violon électrique avec une sonorité claire et un design moderne, idéal pour les musiciens sur scène.', 15, 'violon_Stagg.png', 2, 0, 2, 'C1'),
(3, 'Instrument à cordes', 'Basse électrique', 'Housse de transport, câbles', 400.00, 'Fender', 'Basse électrique de qualité professionnelle, idéale pour un jeu de basse puissant et précis.', 10, 'basse_fender.jpg', 2, 0, 1, 'C1'),
(4, 'Instrument à vent', 'Saxophone alto', 'Anches, étui', 600.00, 'Selmer', 'Saxophone alto avec une excellente projection sonore et une grande durabilité.', 8, 'saxophone_selmer.png', 2, 0, 5, 'C2'),
(5, 'Instrument à vent', 'Flûte traversière', 'Cahier d_exercices, huile pour clé', 250.00, 'Yamaha', 'Flûte traversière professionnelle avec un son clair et une réponse rapide.', 12, 'flutte_traversiere_yamaha.png', 2, 0, 4, 'C2'),
(6, 'Instrument à vent', 'Trompette', 'Embouchure de rechange, huile', 400.00, 'Bach', 'Trompette de haute qualité avec un son brillant, idéale pour les orchestres et les musiciens solo.', 10, 'trompette_bach.png', 2, 5, 1, 'C2'),
(7, 'Instrument à percussion', 'Batterie électronique', 'Pédale, cymbales', 800.00, 'Roland', 'Batterie électronique avec des sons réalistes et une réponse rapide, idéale pour la pratique à domicile.', 6, 'batterie_electronique_roland(percussion).png', 2, 0, 2, 'C3'),
(8, 'Instrument à percussion', 'Cajón', 'Housse de transport', 120.00, 'Meinl', 'Cajón acoustique de qualité supérieure, parfait pour les performances en solo ou en groupe.', 14, 'cajon_meinl.jpg', 2, 0, 5, 'C3'),
(9, 'Instrument à percussion', 'Congas', 'Paires de balais, huile pour peau', 300.00, 'LP', 'Congas avec une sonorité riche et profonde, utilisées dans divers styles musicaux latins.', 7, 'congas_LP.png', 2, 0, 4, 'C3'),
(10, 'Clavier et piano', 'Piano numérique', 'Pédale de sustain, banc', 450.00, 'Roland', 'Piano numérique avec 88 touches, idéal pour les pianistes débutants et intermédiaires.', 20, 'piano_numerique_roland.png', 2, 0, 4, 'C4'),
(11, 'Clavier et piano', 'Clavier MIDI', 'Câble USB', 120.00, 'Akai', 'Clavier MIDI compact avec des touches sensibles à la vélocité, parfait pour la production musicale.', 30, 'clavier_midi_akai.png', 2, 50, 3, 'C4'),
(12, 'Clavier et piano', 'Piano droit', 'Banquette, étouffoir', 2000.00, 'Yamaha', 'Piano droit acoustique avec une sonorité riche et une mécanique performante.', 5, 'piano_droit_yamaha.png', 2, 0, 1, 'C4'),
(13, 'Instrument de musique électronique', 'Synthétiseur analogique', 'Alimentation, câble MIDI', 350.00, 'Korg', 'Synthétiseur analogique offrant des sonorités chaudes et riches pour les musiciens électroniques.', 15, 'synthetiseur_analogique_korg.png', 2, 0, 4, 'C5'),
(14, 'Instrument de musique électronique', 'Batterie électronique', 'Pédale de grosse caisse, câbles', 800.00, 'Roland', 'Batterie électronique avec des pads sensibles et des sons de percussion réalistes, idéale pour les performances live.', 10, 'batterie_electronique_roland(musique_electronique).png', 2, 0, 3, 'C5'),
(15, 'Instrument de musique électronique', 'Guitare MIDI', 'Câble USB, plectres', 400.00, 'Roland', 'Guitare MIDI permettant de jouer une large gamme de sons synthétiques, avec une interface fluide pour les musiciens.', 5, 'guitare_midi_roland.png', 2, 0, 5, 'C5'),
(16, 'Instrument traditionnel', 'Sitar', 'Housse de protection', 500.00, 'Ravi', 'Sitar de qualité artisanale avec un son authentique pour les musiciens expérimentés.', 4, 'sitar_ravi.png', 2, 0, 2, 'C6'),
(17, 'Instrument traditionnel', 'Djembe', 'Housse, balais', 150.00, 'Meinl', 'Djembe en bois avec une peau de qualité, idéal pour les concerts et les sessions de percussion.', 12, 'djembe_meinl.png', 2, 10, 5, 'C6'),
(18, 'Instrument traditionnel', 'Shamisen', 'Cordes de rechange', 250.00, 'Koto Shop', 'Shamisen japonais traditionnel avec une sonorité distincte et une grande capacité d_expression.', 6, 'shamisen_koto.png', 2, 0, 2, 'C6'),
(19, 'Accessoire', 'Médiators', 'Lot de 6', 5.00, 'Dunlop', 'Médiators en plastique dur, idéal pour les instruments à cordes.', 50, 'mediators_dunlop.png', 2, 0, 1, 'C7'),
(20, 'Accessoire', 'Câble audio', 'Câble Jack 3m', 10.00, 'Hosa', 'Câble audio de qualité professionnelle, avec connecteurs plaqués or pour une transmission de signal optimale.', 100, 'cables_audio_hosa.png', 2, 0, 1, 'C7'),
(21, 'Accessoire', 'Housse de transport', 'Pour guitare', 30.00, 'Ibanez', 'Housse de transport robuste et légère, offrant une protection optimale pour vos instruments.', 40, 'housse_guitare_ibanez.png', 2, 10, 5, 'C7'),
(22, 'Équipement audio et enregistrement', 'Interface audio USB', 'Câble USB, logiciel d_enregistrement', 120.00, 'Focusrite', 'Interface audio USB 2 canaux, idéale pour l_enregistrement de musique à domicile.', 30, 'interface_audio_usb_focusrite.png', 2, 0, 4, 'C8'),
(23, 'Équipement audio et enregistrement', 'Enregistreur portable', 'Carte mémoire, trépied', 200.00, 'Zoom', 'Enregistreur portable avec une qualité d_enregistrement haute résolution, parfait pour les podcasts et les prises de son sur le terrain.', 20, 'enregistreur_portable_zoom.png', 2, 0, 4, 'C8'),
(24, 'Équipement audio et enregistrement', 'Moniteurs de studio', 'Câbles d_alimentation, supports', 350.00, 'Yamaha', 'Moniteurs de studio avec un son clair et précis, parfaits pour le mixage et l_enregistrement.', 15, 'moniteurs_de_studio_yamaha.jpg', 2, 0, 2, 'C8');


