<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../../assets/css/style.css" />
	<link rel="shortcut icon" href="../../assets/svg/st-raph.svg" type="image/x-icon" />
	<script src="https://kit.fontawesome.com/28b70435c7.js" crossorigin="anonymous"></script>
	<!-- <script src="assets/js/GPS.js"></script> -->
	<title>Paris | Jeu</title>
</head>

<body>
	<main>
		<?php
		session_start();
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
		// Récupère l'ID de l'utilisateur à partir de la session
		$user_id = $_SESSION['user_id'];
		// Enregistre le clic dans la base de données
		$sql = "INSERT INTO ranking (team_id, time) VALUES ('$user_id', NOW())";
		$conn->query($sql);
		$conn->close();
		?>

		<h1>Bien joué !</h1>

		<h3>Vous avez fini mon jeu!</h3>

		<p>Donnez votre avis sur le jeu :</p>
		<form action="../../php/avis_register.php" method="POST">
			<label for="avis">Votre avis :</label>
			<textarea name="avis" id="avis" required></textarea>

			<label for="note">Note :</label>
			<select name="note" id="note" required>
				<option value="1">1 étoile</option>
				<option value="2">2 étoiles</option>
				<option value="3">3 étoiles</option>
				<option value="4">4 étoiles</option>
				<option value="5">5 étoiles</option>
			</select>

			<div class="btn"><button type="submit">Enregistrer</button></div>
		</form>

	</main>
	<footer>
		<p class="copyright">&copy;Thibault Soquette - Tous droits réservés</p>
	</footer>
</body>

</html>