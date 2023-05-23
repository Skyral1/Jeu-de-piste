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
    <main>
        <h1>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Connexion à la base de données
                $host = "localhost";
                $user = "paris";
                $password = "Rivotril_362778";
                $dbname = "paris";

                $conn = mysqli_connect($host, $user, $password, $dbname);

                // Vérification de la connexion
                if (!$conn) {
                    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
                }

                // Récupération des données du formulaire
                $teamName = $_POST["teamName"];
                $name_1 = $_POST["name_1"];
                $name_2 = $_POST["name_2"];
                $name_3 = $_POST["name_3"];
                $name_4 = $_POST["name_4"];

                // Requête SQL pour enregistrer l'équipe
                if ($name_4 > 0) {
                    $sql = "INSERT INTO teams (teamName, name_1, name_2, name_3, name_4) VALUES ('$teamName', '$name_1', '$name_2', '$name_3', '$name_4')";
                } else {
                    $sql = "INSERT INTO teams (teamName, name_1, name_2, name_3) VALUES ('$teamName', '$name_1', '$name_2', '$name_3')";
                }

                

                if (mysqli_query($conn, $sql)) {
                    echo "L'équipe a été enregistrée avec succès.";
                } else {
                    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
                }

                // Requête SQL pour récupérer l'ID de l'utilisateur
                $sql_team = "SELECT id FROM teams WHERE teamName = '$teamName'";
                $result = $conn->query($sql_team);

                if ($result->num_rows > 0) {
                    // Enregistre l'ID de l'utilisateur dans la session
                    $row = $result->fetch_assoc();
                    session_start();
                    $_SESSION['user_id'] = $row['id'];
                    // setcookie('session_id', serialize($row['id']), time() + 7200);
                } else {
                    echo "User not found";
                }

                // Fermeture de la connexion à la base de données
                mysqli_close($conn);
            }
            ?>
        </h1>

        <form action="./redirect.php">
            <div class="btn"><button type="submit">Commencer</button></div>
        </form>
        <!-- <a class="btn_a" href="../pages/enigme-1/">Commencer</a> -->
    </main>
    <footer>
        <p class="copyright">&copy;Thibault Soquette - Tous droits réservés</p>
    </footer>
</body>

</html>