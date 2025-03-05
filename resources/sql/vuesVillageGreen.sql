USE VillageGreen;

CREATE VIEW Jointure_Articles_Fournisseurs
AS
SELECT a.IDart
FROM Articles a 
JOIN Fournisseur f ON a.IDart = f.IDfourni;

SELECT * FROM Jointure_Articles_Fournisseurs;


CREATE VIEW Jointure_Articles_Categorie_SousCat
AS
SELECT a.IDart
FROM Articles a 
JOIN Categorie c ON a.IDCat = c.IDCat 
JOIN Sous_categorie sc ON c.IDSousCat = sc.IDSousCat;

SELECT * FROM Jointure_Articles_Categorie_SousCat;