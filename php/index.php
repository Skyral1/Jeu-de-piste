<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

// Afficher un message de bienvenue
// echo 'Bienvenue, ' . $_SESSION['username'] . '!';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="shortcut icon" href="../assets/svg/st-raph.svg" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/28b70435c7.js" crossorigin="anonymous"></script>
    <!-- <script src="assets/js/GPS.js"></script> -->
    <title>Paris | Jeu</title>
</head>

<body>
    <header>
        <img class="logo" src="../assets/svg/st-raph.svg" alt="Logo St-Raphaël" />
    </header>
    <main>
        <h1>Bienvenue sur le panneau de contrôle.</h1>

        <a class="btn_a" href="../assets/pdf/Fiche trajet - Paris.pdf">Trajet</a>
        <?php
        // Vérifier si l'utilisateur est connecté
        $username = $_SESSION['username'];
        if ($username === "Skyral") {
            echo "<a class=\"btn_a\" href=\"./info.php\">Info serveur</a>";
        }
        ?>
        <a class="btn_a" href="./teams.php">Liste des équipes</a>
        <a class="btn_a" href="./images.php">Photos</a>
        <a class="btn_a" href="../pages/podium/">Podium</a>
    </main>
    <footer>
        <p class="copyright">&copy;Thibault Soquette - Tous droits réservés</p>
    </footer>
</body>

</html>