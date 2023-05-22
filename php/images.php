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
        <h1>Répertoire photo</h1>

        <form action="./images.php" method="POST">
            <label for="choixImage">Choisissez une équipe</label>
            <select name="choixImage">
                <?php
                $host = "localhost";
                $user = "root";
                $password = "Rivotril_362778";
                $dbname = "paris_jeu";

                $conn = mysqli_connect($host, $user, $password, $dbname);

                // Vérification de la connexion
                if (!$conn) {
                    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
                }

                $sql_teams = "SELECT teamName FROM teams";
                $result = $conn->query($sql_teams);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $teamName = $row['teamName'];
                        $selected = ($teamName == $_POST['choixImage']) ? "selected" : ""; // Vérifie si l'équipe est sélectionnée
                
                        echo '<option value="' . $teamName . '" ' . $selected . '>' . $teamName . '</option>';
                    }
                } else {
                    echo '<option value="">Aucune équipe enregistrée</option>';
                }

                mysqli_close($conn);
                ?>
            </select>

            <button type="submit">Afficher</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $choixImage = $_POST['choixImage'];

            $cheminDossier = "../assets/img/" . $choixImage;

            if (is_dir($cheminDossier)) {
                $images = glob($cheminDossier . "/*.jpg"); // Récupère toutes les images avec l'extension .jpg du dossier
                $images = array_merge($images, glob($cheminDossier . "/*.png")); // Récupère toutes les images avec l'extension .png du dossier
        
                if (!empty($images)) {
                    foreach ($images as $image) {
                        echo '<img src="' . $image . '" alt="Image">';
                    }
                } else {
                    echo "Aucune image trouvée dans le dossier sélectionné.";
                }
            } else {
                echo "Le dossier sélectionné n'existe pas.";
            }
        }
        ?>
        <a class="btn_a" href="./">Retour</a>
    </main>
    <footer>
        <p class="copyright">&copy;Thibault Soquette - Tous droits réservés</p>
    </footer>
</body>

</html>