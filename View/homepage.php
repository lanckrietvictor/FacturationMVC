<!DOCTYPE html>
<html>
<head>
	<title>Facturation</title>
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

	a {
		text-decoration: none;
		color: black;
	}
</style>
<body>
	<h1>
		Facturation
	</h1>
	<p>
		Bonjour Jean-Christian!
	</p>

	<h2>5 dernières factures</h2>

	<div id="test">
	</div>

	<table>
		<tr>
			<th>ID de la facture</th>
			<th>Numéro de la facture</th>
			<th>Date de la facture</th>
			<th>ID de la personne</th>
			<th>ID de la société</th>
		</tr>

		<?php

		for ($i=0; $i < 5; $i++) {

			foreach ($factures_sorted_by_date[$i] as $key => $value) {
				echo "<td>".$value."</td>";
			}

			echo
			"<form method='get'>
				<td style='border: none;'>
					<button type='submit' name='detailfacture' value = '".$factures_sorted_by_date[$i]["id_facture"]."'>
							Information détaillée
						</button>
					</td>
			</form>";

			echo "</tr>";
		}

		?>

	</table>
	<br>
	<hr>

	<h2>5 dernières personnes</h2>

	<table>
		<tr>
			<th>ID de la personne</th>
			<th>Nom de la personne</th>
			<th>Prénom de la personne</th>
			<th>Date de la facture</th>
		</tr>

		<?php

		for ($i=0; $i < count($persons_sorted_by_date); $i++) {
			echo "<tr>";
			foreach ($persons_sorted_by_date[$i] as $key => $value) {
				echo "<td>".$value."</td>";
			}

			echo
			"<form method='get'>
				<td style='border: none;'>
					<button type='submit' name='detailcontact' value = '".$persons_sorted_by_date[$i]["id_personne"]."'>
							Information détaillée
						</button>
					</td>
			</form>";

			echo "</tr>";
		}

		?>

	</table>
	<br>
	<hr>

	<h2>5 dernières sociétés</h2>

	<table>
		<tr>
			<th>ID de la société</th>
			<th>Nom de la société</th>
			<th>Date de la facture</th>
		</tr>

		<?php

		for ($i=0; $i < count($societes_sorted_by_date); $i++) {
			echo "<tr>";
			foreach ($societes_sorted_by_date[$i] as $key => $value) {
				echo "<td>".$value."</td>";
			}

			echo
			"<form method='get'>
				<td style='border: none;'>
					<button type='submit' name='detailsocietes' value = '".$societes_sorted_by_date[$i]["id_societe"]."'>
							Information détaillée
						</button>
					</td>
			</form>";

			echo "</tr>";
		}

		?>

	</table>

	<br>
	<form action="" method="get">
		<button type="submit" name="client"><h3>Client details</h3></button>
		<button type="submit" name="fournisseur"><h3>Fournisseur details</h3></button>
	</form>

	<script>
		function linkToDetailFacture (objButton) {
			var clicked = objButton.value;
			location.href = "detailfacture.php?detail="+clicked;
		}

		function linkToDetailPerson (objButton) {
			var clicked = objButton.value;
			location.href = "detailcontact.php?detail="+clicked;
		}

		function linkToDetailSociete (objButton) {
			var clicked = objButton.value;
			location.href = "detailsociete.php?detail="+clicked;
		}
	</script>
</body>
</html>
