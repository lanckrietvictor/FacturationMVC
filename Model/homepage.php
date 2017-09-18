<?php

//display five latest factures
$table_date = $pdo->query("SELECT *
	FROM factures
	ORDER BY date_facture DESC
	LIMIT 5");
$factures_sorted_by_date = $table_date->fetchAll(PDO::FETCH_ASSOC);

//display five latest persons
$table_persons = $pdo->query("
	SELECT factures.id_personne, factures.numero_facture, personnes.nom_personne, personnes.prenom_personne
	FROM factures
	INNER JOIN personnes
	ON factures.id_personne = personnes.id_personne
	ORDER BY date_facture DESC
	LIMIT 5");
$persons_sorted_by_date = $table_persons->fetchAll(PDO::FETCH_ASSOC);

//display five latest firms
$table_firms = $pdo->query("
	SELECT factures.id_societe, societes.nom_societe, factures.date_facture
	FROM factures
	INNER JOIN societes
	ON factures.id_societe = societes.id_societe
	ORDER BY factures.date_facture DESC
	LIMIT 5");
$societes_sorted_by_date = $table_firms->fetchAll(PDO::FETCH_ASSOC);

?>
