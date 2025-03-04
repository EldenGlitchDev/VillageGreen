<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\DBAL\Result\ResultStatement;

/**
 * @extends ServiceEntityRepository<Article>
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    /*public function topArticlesVendus()
    {
        $conn=$this->getEntityManager()->getConnection();
        $sql='
            SELECT a.IDart AS Reference_article, a.NomArt AS Nom_Article, a.QuStockArt AS Quantite_Stock_Articles, SUM(bdl.QuBon) AS Somme_quantite_bon, f.NomFourni AS Fournisseur
            FROM Articles a
            JOIN Bon_de_livraison bdl ON a.IDart = bdl.IDComm
            JOIN Commande c ON bdl.IDComm = c.IDComm
            JOIN Fournisseur f ON a.IDFourni = f.IDfourni 
            WHERE YEAR(c.DateComm) = 2025
            GROUP BY a.NomArt, f.NomFourni
            ORDER BY Somme_quantite_bon DESC'
            LIMIT 10';
            
        $stmt=$conn->executeQuery($sql);
        return $stmt->fetchAllAssociative();

        /*$stmt=$conn->executeQuery($sql);
        $result=$stmt->fetchAllAssociative();
        return $result;
    }*/
}
