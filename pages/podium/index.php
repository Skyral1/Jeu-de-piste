<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="shortcut icon" href="../../assets/svg/st-raph.svg" type="image/x-icon" />
	<title>Paris | Jeu</title>
</head>

<body>
	<main>
		<?php
		// Connexion à la base de données
		$servername = "localhost";
		$username = "root";
		$password = "Rivotril_362778";
		$dbname = "paris_jeu";
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Vérifie si la connexion est réussie
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		// Exécute la requête SQL pour récupérer l'équipe avec le plus petit time
		$sql = "SELECT r.team_id, t.teamName, MIN(r.time) as min_time FROM ranking r JOIN teams t ON r.team_id = t.id GROUP BY r.team_id ORDER BY min_time ASC";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// Affiche les résultats sous forme de classement
			echo "<h2 class=\"title_p\">Classement des équipes</h2>";
			echo "<table class=\"podium\">";
			echo "<tr><th><h3>Équipe</h3></th><th><h3>Heure de fin</h3></th></tr>";
			while ($row = $result->fetch_assoc()) {
				echo "<tr><td><b>" . $row["teamName"] . "</b></td><td>" . $row["min_time"] . "</td></tr>";
			}
			echo "</table>";
		} else {
			echo "Aucun résultat trouvé.";
		}
		$conn->close();
		?>
	</main>
	<footer>
		<p class="copyright">&copy;Thibault Soquette - Tous droits réservés</p>
	</footer>
</body>

</html>