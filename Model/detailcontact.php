<?php

$sth = $pdo->query("SELECT personnes.id_personne, personnes.nom_personne, personnes.prenom_personne, personnes.tel_personne, personnes.email_personne, societes.nom_societe
	FROM personnes
	INNER JOIN societes
	ON personnes.id_societe = societes.id_societe
	");						//Select required data from database

$personne = $sth->fetchAll(PDO::FETCH_ASSOC);	//Put data into 											easily accessible array

$sth2 = $pdo->query("SELECT * FROM factures WHERE id_personne = ".$idf);					//Select all data from table factures 								for specific person
$factures_by_person = $sth2->fetchAll(PDO::FETCH_ASSOC);

?>
