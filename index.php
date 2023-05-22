<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="shortcut icon" href="assets/svg/st-raph.svg" type="image/x-icon" />
	<script src="https://kit.fontawesome.com/28b70435c7.js" crossorigin="anonymous"></script>
	<title>Paris | Jeu</title>
</head>

<body>
	<header>
		<img class="logo" src="assets/svg/st-raph.svg" alt="Logo St-Raphaël" />
	</header>
	<main>

		<a class="btn_a" href="./php/">Pannel professeur</a>

		<h1>Bienvenue dans mon jeu de piste!</h1>

		<p>
			Ici vous devrez résoudre des énigmes et répondre à des questions de
			culture géngérale.
		</p>

		<p>
			A chaque réponse trouvée, un itinéraire vous sera donné pour vous
			rendre à la prochaine étape.
		</p>

		<p>
			Votre but est de prendre le moins de temps possible pour arriver en haut du classement.
		</p>

		<p>
			En cas de problème durant le jeu, appelez ce numéro : <a href="tel:+32470835771">+32 470 83 57 71</a>.
		</p>

		<p class="warn">
			Je ne suis pas responsable du temps des trajets. Les différents points du jeu ont été choisis par les
			professeurs, j'ai été mis au courant des modifications la semaine passée.
		</p>

		<h2>Inscription</h2>
		<h3>Veuillez introduire votre nom d'équipe et tout vos prénoms</h3>
		<p>Ne pas mettre de caractères spéciaux, uniquement des letres de A à Z</p>

		<form action="./php/team_register.php" method="POST">

			<label for="teamName">Nom d'équipe :</label>
			<input id="teamName" name="teamName" type="text" />
			</br>
			<label for="name_1">Joueur 1 :</label>
			<input id="name_1" name="name_1" type="text" />
			</br>
			<label for="name_2">Joueur 2 :</label>
			<input id="name_2" name="name_2" type="text" />
			</br>
			<label for="name_3">Joueur 3 :</label>
			<input id="name_3" name="name_3" type="text" />
			</br>
			<label for="name_4">Joueur 4 :</label>
			<input id="name_4" name="name_4" type="text" />

			<div class="btn"><button type="submit">Enregistrer</button></div>
		</form>
	</main>
	<footer>
		<p class="copyright">&copy;Thibault Soquette - Tous droits réservés</p>
	</footer>
</body>

</html>