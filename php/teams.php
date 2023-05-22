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
        <?php
        // Se connecter à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "Rivotril_362778";
        $dbname = "paris_jeu";
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if (!$conn) {
            die("Connexion échouée: " . mysqli_connect_error());
        }

        // Exécuter la requête pour sélectionner toutes les données dans la table
        $sql = "SELECT * FROM teams";
        $result = mysqli_query($conn, $sql);

        // Vérifier s'il y a des données
        if (mysqli_num_rows($result) > 0) {
            // Afficher les données
            $result = mysqli_query($conn, "SELECT * FROM teams");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class=\"team_box\"><b>Équipe</b>: " . $row["teamName"] . "<br>" . "<b>Membres</b>: " . $row["name_1"] . " - " . $row["name_2"] . " - " . $row["name_3"];

                if ($row["name_4"] > 0) {
                    echo " - " . $row["name_4"];
                }

                echo "</div>";
            }
        } else {
            echo "0 résultats";
        }

        // Fermer la connexion
        mysqli_close($conn);

        ?>
        <a class="btn_a" href="./">Retour</a>
    </main>
    <footer>
        <p class="copyright">&copy;Thibault Soquette - Tous droits réservés</p>
    </footer>
</body>

</html>