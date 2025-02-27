DROP DATABASE IF EXISTS VillageGreen;

CREATE DATABASE VillageGreen;

USE VillageGreen;

/*Début tables principales*/

CREATE TABLE Utilisateur(
   IDUtil VARCHAR(50),
   NomUtil VARCHAR(50) NOT NULL,
   PrenomUtil VARCHAR(50),
   Siren VARCHAR(14),
   MailUtil VARCHAR(50) NOT NULL,
   NumTelUtil VARCHAR(50) NOT NULL,
   TypeUtil VARCHAR(50) NOT NULL,
   mdpUtil VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDUtil)
);

CREATE TABLE Commande(
   IDComm VARCHAR(50),
   DateComm DATE NOT NULL,
   DateLivrComm DATE NOT NULL,
   PrixTotComm DECIMAL(7,2) NOT NULL,
   PrixUnitComm DECIMAL(7,2) NOT NULL,
   LibelleComm VARCHAR(50) NOT NULL,
   StatutComm VARCHAR(10) NOT NULL,
   UtilComm VARCHAR(50) NOT NULL,
   SousTotalComm DECIMAL(7,2) NOT NULL,
   Fdp DECIMAL(7,2) NOT NULL,
   MontantPaiem DECIMAL(7,2) NOT NULL,
   DatePaiem DATE NOT NULL,
   StatutPaiem VARCHAR(10) NOT NULL,
   MethodePaiem VARCHAR(20) NOT NULL,
   CommandePaiem VARCHAR(50) NOT NULL,
   AdrFactUtil TEXT NOT NULL,
   AdrLivrUtil TEXT NOT NULL,
   FraisExpComm DECIMAL(7,2) NOT NULL,
   PaysComm VARCHAR(50) NOT NULL,
   IDUtil VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDComm),
   FOREIGN KEY(IDUtil) REFERENCES Utilisateur(IDUtil)
);

CREATE TABLE Avis(
   IDAvis VARCHAR(50),
   Note INT NOT NULL,
   CommAvis TEXT,
   DateAvis DATE NOT NULL,
   IDInstru VARCHAR(50) NOT NULL,
   UtilAvis VARCHAR(50) NOT NULL,
   IDUtil VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDAvis),
   FOREIGN KEY(IDUtil) REFERENCES Utilisateur(IDUtil)
);

CREATE TABLE Promotion(
   IDPromo VARCHAR(50),
   CodePromo VARCHAR(7) NOT NULL,
   PourcReduc DECIMAL(7,2) NOT NULL,
   DebutPromo DATE,
   FinPromo DATE,
   TypePromo VARCHAR(70) NOT NULL,
   PRIMARY KEY(IDPromo)
);

CREATE TABLE Bon_de_livraison(
   IDBon_de_livraison VARCHAR(50),
   NoFactBon VARCHAR(50) NOT NULL,
   NomBon VARCHAR(50) NOT NULL,
   AdresseBon VARCHAR(50) NOT NULL,
   IDEntrBon VARCHAR(50) NOT NULL,
   DateCommBon DATE NOT NULL,
   DateExpBon DATE NOT NULL,
   DateLivrBon DATE NOT NULL,
   DetailProdBon VARCHAR(50) NOT NULL,
   QuBon INT NOT NULL,
   DateFactBon DATE NOT NULL,
   NoTVABon VARCHAR(20) NOT NULL,
   DetailTransacBon TEXT NOT NULL,
   PrixUnitHTVABon DECIMAL(7,2) NOT NULL,
   FdpBon DECIMAL(7,2) NOT NULL,
   FraisConditioBon DECIMAL(7,2) NOT NULL,
   TVABon DECIMAL(7,2) NOT NULL,
   RemiseBon DECIMAL(7,2) NOT NULL,
   TotalHTVA_TTCBon DECIMAL(7,2) NOT NULL,
   IDComm VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDBon_de_livraison),
   FOREIGN KEY(IDComm) REFERENCES Commande(IDComm)
);

CREATE TABLE Sous_categorie(
   IDSousCat VARCHAR(50),
   NomSousCat VARCHAR(50) NOT NULL,
   ImageSousCat VARCHAR(255),
   PRIMARY KEY(IDSousCat)
);

CREATE TABLE Fournisseur(
   IDfourni VARCHAR(50),
   NomFourni VARCHAR(50) NOT NULL,
   MailFourni VARCHAR(50) NOT NULL,
   AdresseFourni VARCHAR(50) NOT NULL,
   TelFourni VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDfourni)
);

CREATE TABLE Categorie(
   IDCat VARCHAR(50),
   NomCat VARCHAR(50) NOT NULL,
   ImageCat VARCHAR(255),
   IDSousCat VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDCat),
   FOREIGN KEY(IDSousCat) REFERENCES Sous_categorie(IDSousCat)
);

CREATE TABLE Articles(
   IDart VARCHAR(50),
   TypeArt VARCHAR(50) NOT NULL,
   NomArt VARCHAR(50) NOT NULL,
   AccessoireArt VARCHAR(50) NOT NULL,
   PrixArt DECIMAL(7,2) NOT NULL,
   MarqueArt VARCHAR(50) NOT NULL,
   DescrArt TEXT,
   QuStockArt INT NOT NULL,
   PhotoArt VARCHAR(255),
   GarantieArt VARCHAR(50),
   PromoArt INT,
   IDfourni VARCHAR(50) NOT NULL,
   IDCat VARCHAR(50) NOT NULL,
   PRIMARY KEY(IDart),
   FOREIGN KEY(IDfourni) REFERENCES Fournisseur(IDfourni),
   FOREIGN KEY(IDCat) REFERENCES Categorie(IDCat)
);

/*LIASON*/

CREATE TABLE COMMANDER(
   IDart VARCHAR(50),
   IDComm VARCHAR(50),
   quantite_commande INT,
   PRIMARY KEY(IDart, IDComm),
   FOREIGN KEY(IDart) REFERENCES Articles(IDart),
   FOREIGN KEY(IDComm) REFERENCES Commande(IDComm)
);

CREATE TABLE DONNE(
   IDart VARCHAR(50),
   IDAvis VARCHAR(50),
   PRIMARY KEY(IDart, IDAvis),
   FOREIGN KEY(IDart) REFERENCES Articles(IDart),
   FOREIGN KEY(IDAvis) REFERENCES Avis(IDAvis)
);

CREATE TABLE A(
   IDUtil VARCHAR(50),
   IDPromo VARCHAR(50),
   PRIMARY KEY(IDUtil, IDPromo),
   FOREIGN KEY(IDUtil) REFERENCES Utilisateur(IDUtil),
   FOREIGN KEY(IDPromo) REFERENCES Promotion(IDPromo)
);

CREATE TABLE APPLIQUER(
   IDComm VARCHAR(50),
   IDPromo VARCHAR(50),
   PRIMARY KEY(IDComm, IDPromo),
   FOREIGN KEY(IDComm) REFERENCES Commande(IDComm),
   FOREIGN KEY(IDPromo) REFERENCES Promotion(IDPromo)
);

CREATE TABLE SORT(
   IDart VARCHAR(50),
   IDBon_de_livraison VARCHAR(50),
   quantite_bon_livraison INT,
   PRIMARY KEY(IDart, IDBon_de_livraison),
   FOREIGN KEY(IDart) REFERENCES Articles(IDart),
   FOREIGN KEY(IDBon_de_livraison) REFERENCES Bon_de_livraison(IDBon_de_livraison)
);