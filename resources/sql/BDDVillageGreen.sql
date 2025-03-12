DROP DATABASE IF EXISTS VillageGreen;

CREATE DATABASE VillageGreen;

USE VillageGreen;

/*Début tables principales*/

CREATE TABLE Categorie(
   IDCat VARCHAR(50),
   NomCat VARCHAR(50) NOT NULL,
   ImageCat VARCHAR(250),
   PRIMARY KEY(IDCat)
);

CREATE TABLE Utilisateur(
   IDUtil VARCHAR(50),
   NomUtil VARCHAR(50) NOT NULL,
   PrenomUtil VARCHAR(50),
   Siren VARCHAR(14),
   MailUtil VARCHAR(50) NOT NULL,
   NumTelUtil VARCHAR(50) NOT NULL,
   TypeUtil VARCHAR(50) NOT NULL,
   MdpUtil VARCHAR(50) NOT NULL,
   PromoUtil INT,
   AdrVoiePostUtil TEXT NOT NULL,
   AdrCodePostUtil INT NOT NULL,
   AdrVilleUtil VARCHAR(50) NOT NULL,
   AdrPaysUtil VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDUtil)
);

CREATE TABLE Sous_categorie(
   IDSousCat VARCHAR(50),
   NomSousCat VARCHAR(50) NOT NULL,
   ImageSousCat VARCHAR(250),
   IDCat VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDSousCat),
   FOREIGN KEY(IDCat) REFERENCES Categorie(IDCat)
);

CREATE TABLE Fournisseur(
   IDfourni VARCHAR(50),
   Nom_Fourni VARCHAR(50) NOT NULL,
   Mail_Fourni VARCHAR(50) NOT NULL,
   Adresse_Fourni VARCHAR(50) NOT NULL,
   Tel_Fourni VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDfourni)
);

CREATE TABLE StatutCommande(
   Id_StatutCommande VARCHAR(50),
   StatutComm VARCHAR(10) NOT NULL,
   PRIMARY KEY(Id_StatutCommande)
);

CREATE TABLE StatutPaiement(
   Id_StatutPaiement VARCHAR(50),
   StatutPaiem VARCHAR(10) NOT NULL,
   PRIMARY KEY(Id_StatutPaiement)
);

CREATE TABLE Article(
   IDart VARCHAR(50),
   TypeArt VARCHAR(50) NOT NULL,
   NomArt VARCHAR(50) NOT NULL,
   AccessoireArt VARCHAR(50) NOT NULL,
   PrixArt INT NOT NULL,
   MarqueArt VARCHAR(50) NOT NULL,
   DescrArt TEXT,
   QuStockArt INT NOT NULL,
   PhotoArt VARCHAR(250),
   GarantieArt VARCHAR(50),
   PromoArt INT,
   PrixUnitHTVAArt DECIMAL(7,2) NOT NULL,
   IDSousCat VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDart),
   FOREIGN KEY(IDSousCat) REFERENCES Sous_categorie(IDSousCat)
);

CREATE TABLE Commande(
   IDComm VARCHAR(50),
   DateComm DATE NOT NULL,
   LibelleComm VARCHAR(50) NOT NULL,
   UtilComm VARCHAR(50) NOT NULL,
   Fdp DECIMAL(7,2) NOT NULL,
   MontantPaiem DECIMAL(7,2) NOT NULL,
   DatePaiem DATE NOT NULL,
   MethodePaiem VARCHAR(20) NOT NULL,
   CommandePaiem VARCHAR(50) NOT NULL,
   AdrFactUtil TEXT NOT NULL,
   AdrLivrUtil TEXT NOT NULL,
   FraisExpComm DECIMAL(7,2) NOT NULL,
   PaysComm VARCHAR(50) NOT NULL,
   AdrVoiePostComm TEXT NOT NULL,
   AdrCodePostComm INT NOT NULL,
   AdrVilleComm VARCHAR(50) NOT NULL,
   Id_StatutPaiement VARCHAR(50) NOT NULL,
   Id_StatutCommande VARCHAR(50) NOT NULL,
   IDUtil VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDComm),
   FOREIGN KEY(Id_StatutPaiement) REFERENCES StatutPaiement(Id_StatutPaiement),
   FOREIGN KEY(Id_StatutCommande) REFERENCES StatutCommande(Id_StatutCommande),
   FOREIGN KEY(IDUtil) REFERENCES Utilisateur(IDUtil)
);

CREATE TABLE Bon_de_livraison(
   IDBon_de_livraison VARCHAR(50),
   NomBon VARCHAR(50) NOT NULL,
   IDEntrBon VARCHAR(50) NOT NULL,
   DateCommBon DATE NOT NULL,
   DateExpBon DATE NOT NULL,
   DateLivrBon DATE NOT NULL,
   DetailProdBon VARCHAR(50) NOT NULL,
   QuBon INT NOT NULL,
   DateFactBon DATE NOT NULL,
   NoTVABon VARCHAR(20) NOT NULL,
   DetailTransacBon TEXT NOT NULL,
   FdpBon DECIMAL(7,2) NOT NULL,
   FraisConditioBon DECIMAL(7,2) NOT NULL,
   RemiseBon DECIMAL(7,2) NOT NULL,
   AdrVoiePostBon TEXT NOT NULL,
   AdrCodePostBon INT NOT NULL,
   AdrVilleBon VARCHAR(50) NOT NULL,
   AdrPaysComm VARCHAR(50) NOT NULL,
   IDComm VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDBon_de_livraison),
   UNIQUE(IDComm),
   FOREIGN KEY(IDComm) REFERENCES Commande(IDComm)
);

/*Début tables liaisons*/

CREATE TABLE VEND(
   IDart VARCHAR(50),
   IDfourni VARCHAR(50),
   PRIMARY KEY(IDart, IDfourni),
   FOREIGN KEY(IDart) REFERENCES Article(IDart),
   FOREIGN KEY(IDfourni) REFERENCES Fournisseur(IDfourni)
);

CREATE TABLE CONTENIR(
   IDart VARCHAR(50),
   IDComm VARCHAR(50),
   PrixArt INT NOT NULL,
   QuStockArt INT NOT NULL,
   PRIMARY KEY(IDart, IDComm),
   FOREIGN KEY(IDart) REFERENCES Article(IDart),
   FOREIGN KEY(IDComm) REFERENCES Commande(IDComm)
);