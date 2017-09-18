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

	$idf--;

	echo  "<h1>".$personne[$idf]["prenom_personne"]." ".$personne[$idf]["nom_personne"]."</h1>";		//Make title personalised for 									by id

	?>

	<h2>Information personelle</h2>


	<table>
		<tr>
			<th>ID de la personne</th>
			<th>Nom de la personne</th>
			<th>Prénom de la personne</th>
			<th>Numéro téléphone de la personne</th>
			<th>Email de la personne</th>
			<th>Nom de la société</th>
		</tr>

		<?php

		echo "<tr>";

		foreach ($personne[$idf] as $key => $value) {
			echo "<td>".$value."</td>";		//Table with all data 									on one person
		}

		echo "<tr>";

		?>

	</table>

	<h2>Information des factures</h2>
	<table>
		<tr>
			<th>ID de la facture</th>
			<th>Numéro de la facture</th>
			<th>Date de la facture</th>
			<th>ID de la personne</th>
			<th>ID de la société</th>
		</tr>


		<?php

		for ($i=0; $i < count($factures_by_person); $i++) {

			echo "<tr>";

			foreach ($factures_by_person[$i] as $key => $value) {
				echo "<td>".$value."</td>";
			}							//All factures made by this 							person

			echo "</tr>";

		}

		?>

	</table>

</body>
</html>
