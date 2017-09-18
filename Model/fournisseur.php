<?php

$sth = $pdo->query("
	SELECT societes.id_societe, societes.nom_societe, type.type
	FROM societes
	INNER JOIN type
	ON type.id_type = societes.id_type
	WHERE type.type = 'fournisseur'");
$clients = $sth->fetchAll(PDO::FETCH_ASSOC);

?>
