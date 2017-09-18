<?php

$sth = $pdo->query("SELECT *
	FROM factures
	WHERE id_facture = ".$idf);
$sorted_by_date = $sth->fetchAll(PDO::FETCH_ASSOC);

?>
