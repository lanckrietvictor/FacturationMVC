<!DOCTYPE html>
<html>
<head>
	<title>Clients</title>
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

	button {
		width: 100%;
	}
</style>
<body>
	<h1>Page client</h1>

	<table>
		<tr>
			<th>ID de la société</th>
			<th>Nom de la société</th>
			<th>Detail société</th>
		</tr>

		<?php

		for ($i=0; $i < count($clients); $i++) {
			echo "<tr>";
			foreach ($clients[$i] as $key => $value) {
				if ($key != "type") {
					echo "<td>".$value."</td>";
				}
			}
			echo
			"<form method='get'>
				<td style='border: none;'>
					<button type='submit' name='detailsocietes' value = '".$clients[$i]["id_societe"]."'>
							Information détaillée
						</button>
					</td>
			</form>";
			echo "</tr>";
		}

		?>

	</table>

	<script>
		function linkToDetailSociete (objButton) {
			var clicked = objButton.value;
			location.href = "detailsociete.php?detail="+clicked;
		}
	</script>
</body>
</html>
