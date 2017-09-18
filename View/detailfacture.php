<!DOCTYPE html>
<html>
<head>
	<title>Detail Facture</title>
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

	echo  "<h1>Ceci sont les details pour la facture avec ID ".$idf."</h1>";
	?>
	<table>
		<tr>
			<th>ID de la facture</th>
			<th>Numéro de la facture</th>
			<th>Date de la facture</th>
			<th>ID de la personne</th>
			<th>ID de la société</th>
		</tr>

		<?php

		echo "<tr>";

		foreach ($sorted_by_date[0] as $key => $value) {
			echo "<td>".$value."</td>";
		}

		echo "<tr>";

		?>

	</table>


</body>
</html>
