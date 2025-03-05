USE VillageGreen;

/*Chiffre d'affaires mois par mois pour une année sélectionnée*/

SELECT 
    YEAR(DateComm) AS Annee,
    MONTH(DateComm) AS Mois,
    SUM(PrixTotComm) AS Chiffre_Affaires
FROM 
    Commande
WHERE 
    YEAR(DateComm) = 2025
GROUP BY 
    YEAR(DateComm), MONTH(DateComm)
ORDER BY 
    Mois;

/*Chiffre d'affaires généré pour un fournisseur*/ /*ne marche pas*/

SELECT f.NomFourni AS Fournisseur, SUM(c.PrixTotComm) AS ChiffreAffaires
FROM Fournisseur f
JOIN Articles a ON f.IDFourni = a.IDFourni
JOIN Bon_de_livraison bdl ON a.IDart = bdl.IDComm
JOIN Commande c ON bdl.IDComm = c.IDComm
WHERE c.StatutComm = 'Validée'
GROUP BY f.NomFourni;

/*TOP 10 des produits les plus commandés pour une année sélectionnée (référence et nom du produit, quantité commandée, fournisseur)*/

SELECT a.IDart AS Reference_article, a.NomArt AS Nom_Article, a.QuStockArt AS Quantite_Stock_Articles, SUM(bdl.QuBon) AS Somme_quantite_bon, f.NomFourni AS Fournisseur
FROM Articles a
JOIN Bon_de_livraison bdl ON a.IDart = bdl.IDComm
JOIN Commande c ON bdl.IDComm = c.IDComm
JOIN Fournisseur f ON a.IDFourni = f.IDfourni 
WHERE YEAR(c.DateComm) = 2025
GROUP BY a.NomArt, f.NomFourni
ORDER BY Somme_quantite_bon DESC
LIMIT 10;

/*TOP 10 des produits les plus rémunérateurs pour une année sélectionnée (référence et nom du produit, marge, fournisseur)*/

SELECT a.IDart AS Reference_article, a.NomArt AS Nom_Article, f.NomFourni AS Fournisseur, SUM(a.QuStockArt * bdl.PrixUnitHTVABon) AS Marge
FROM Articles a
JOIN Bon_de_livraison bdl ON a.IDart = bdl.IDComm
JOIN Commande c ON a.IDart = c.IDComm
JOIN Fournisseur f ON a.IDfourni = f.IDfourni
WHERE YEAR(c.DateComm) = 2025
GROUP BY f.NomFourni
ORDER BY Marge
LIMIT 10;

/*Top 10 des clients en nombre de commandes ou chiffre d'affaires*/

SELECT u.NomUtil, COUNT (c.IDComm) AS Nombre_Commande
FROM Commande c 
JOIN Utilisateur u ON c.IDUtil = u.IDUtil 
WHERE YEAR(c.DateComm) = 2025
GROUP BY u.NomUtil
ORDER BY Nombre_Commande DESC
LIMIT 10;

/*Répartition du chiffre d'affaires par type de client*/

SELECT c2.NomCat, SUM(a.QuStockArt * bdl.PrixUnitHTVABon) AS Chiffre_d_Affaire, u.TypeUtil AS Type_Utilisateur
FROM Categorie c2
JOIN Articles a ON c2.IDCat = a.IDCat
JOIN Bon_de_livraison bdl ON a.IDArt = bdl.IDComm
JOIN Utilisateur u ON bdl.IDComm = u.IDUtil
GROUP BY c2.NomCat
ORDER BY Chiffre_d_Affaire DESC;

/*Nombre de commandes en cours de livraison.*/

SELECT IDComm AS ID_de_la_commande, LibelleComm AS Nom_de_la_commande, UtilComm AS Nom_du_client, StatutComm AS Statut_de_la_commande
FROM Commande
WHERE StatutComm = 'En cours';




/*SELECT * 
FROM Commande
WHERE StatutComm = 'En cours' OR StatutComm = 'En attente' OR StatutComm = 'Expédiée';

SELECT AVG(DATEDIFF(DatePaiem, DateComm)) AS DelaiMoyen
FROM Commande
WHERE DatePaiem IS NOT NULL AND DateComm IS NOT NULL;


SELECT a.IDart
FROM Articles a 
JOIN Fournisseur f ON a.IDart = f.IDfourni;

SELECT a.IDart
FROM Articles a 
JOIN Categorie c ON a.IDCat = c.IDCat 
JOIN Sous_categorie sc ON c.IDSousCat = sc.IDSousCat;*/