<?php

include "connection.php";

$sth = $pdo->query("
  SELECT ")

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Annuaire</title>
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

	<h1>Annuaire</h1>
	<table>
		<tr>
			<th>ID de la personne</th>
			<th>Nom de la personne</th>
			<th>Prenom de la personne </th>
			<th>Detail de la personne</th>
		</tr>

		<?php

		for ($i=0; $i < count($personnes) ; $i++) {
			echo "<tr>";
			foreach ($personnes[$i] as $key => $value) {
				echo "<td>".$value."</td>";
			}
			echo "<td style='border: none;'><button name='linkToDetailPerson' class='detail' value='".$personnes[$i]["id_personne"]."'onclick='linkToDetailPerson(this)'>Information détaillée</button></td>";
			echo "</tr>";
		}

		?>

	</table>
	<script>
		function linkToDetailPerson (objButton) {
			var clicked = objButton.value;
			location.href = "detailcontact.php?detail="+clicked;
		}
	</script>
</body>
</html>
