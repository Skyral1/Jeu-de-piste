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

		<h3>Vous avez fini mon jeu de piste dans le temps imparti!</h3>

		<p>
			Durant tout le jeu, vous avez récupéré des pièces de puzzle.
			Assemblez-les et résolvez l'énigme finale.
			<br />
			<br />
			Vous avez <b>6 minutes</b> pour trouvez le/la personalité. <br />
			Revenez avec la bonne réponse au près des professeurs, une surprise vous
			y attendra!
		</p>
		<h4>Bonne chance!</h4>
	</main>
	<footer>
		<p class="copyright">&copy;Thibault Soquette - Tous droits réservés</p>
	</footer>
</body>

</html>