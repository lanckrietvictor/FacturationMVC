<!DOCTYPE html>
<html>
<head>
	<title>Societes</title>
	<meta charset="utf-8">
</head>
<style>
	table, th, tr, td {
		border: solid 1px black;
	}

	td {
		margin: auto;
		text-align: center;
	}

	table {
		width: 100%;
	}
</style>
<body>
	<?php

	echo  "<h1> Les données de ".$societes[0]["nom_societe"]."</h1>";						//Make title personalised for each 								society by id

	?>

	<table>
		<tr>
			<th>ID de la société</th>
			<th>Nom de la société</th>
			<th>Adresse de la société</th>
			<th>Numéro téléphone de la société</th>
			<th>TVA de la société</th>
			<th>Type de la société</th>
		</tr>

		<?php

		echo "<tr>";

		foreach ($societes[0] as $key => $value) {
			if($key != "id_type"){
			echo "<td>".$value."</td>";		//Table with all							data on one person
		}
	}

	echo "<tr>";

	?>

</table>

</body>
</html>
