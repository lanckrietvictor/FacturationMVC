<?php

$sth = $pdo->query("
	SELECT societes.*,  type.type
	FROM societes
	INNER JOIN type
	ON type.id_type = societes.id_type
	WHERE societes.id_societe = ".$idf);
$societes = $sth->fetchAll(PDO::FETCH_ASSOC);

?>
