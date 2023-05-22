<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../../../assets/css/style.css" />
	<link rel="shortcut icon" href="../../../assets/svg/st-raph.svg" type="image/x-icon" />
	<script src="https://kit.fontawesome.com/28b70435c7.js" crossorigin="anonymous"></script>
	<!-- <script src="assets/js/GPS.js"></script> -->
	<title>Paris | Jeu</title>
</head>

<body>
	<main>
		<h1>Bien joué !</h1>

		<h4>Rendez-vous à ces coordonnées :</h4>
		<a class="btn_a"
			href="https://www.google.com/maps/dir//Le+Centre+Pompidou+Place+Georges-Pompidou+75004+Paris+France/@48.860642,2.352245,16z/data=!4m5!4m4!1m0!1m2!1m1!1s0x47e66e1c09b820a3:0xb7ac6c7e59dc3345"
			target="_blank" rel="noopener noreferrer">Ouvrir la carte</a>

		<form action="../../../php/upload.php" method="POST" enctype="multipart/form-data">
			<?php
			$url = $_SERVER['REQUEST_URI'];

			if ($url == '/pages/enigme-4/resultat/win.php?error=25') {
				echo ("Une erreur s'est produite lors de l'enregistrement de l'image.");
			}
			?>
			<input type="file" name="image">
			<div class="btn"><button type="submit">Continuer</button></div>
		</form>
	</main>
	<footer>
		<p class="copyright">&copy;Thibault Soquette - Tous droits réservés</p>
	</footer>
</body>

</html>