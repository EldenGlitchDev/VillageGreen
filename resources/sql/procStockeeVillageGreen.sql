USE VillageGreen;

DELIMITER |

CREATE PROCEDURE Commandes_non_soldees

BEGIN
	SELECT * 
	FROM Commande
	WHERE StatutComm = 'En cours' OR StatutComm = 'En attente' OR StatutComm = 'Expédiée';
END

DELIMITER ;

DELIMITER |

CREATE PROCEDURE Delai_Moyen

BEGIN
	SELECT AVG(DATEDIFF(DatePaiem, DateComm)) AS DelaiMoyen
	FROM Commande
	WHERE DatePaiem IS NOT NULL AND DateComm IS NOT NULL;
END

DELIMITER |