<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = "localhost";
    $user = "paris";
    $password = "Rivotril_362778";
    $dbname = "paris";

    $conn = mysqli_connect($host, $user, $password, $dbname);

    // Vérification de la connexion
    if (!$conn) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    }
    session_start();
    $user_id = $_SESSION['user_id'];

    $sql_team = "SELECT teamName FROM teams WHERE id = '$user_id'";
    $result = $conn->query($sql_team);

    if ($result) {
        $row = $result->fetch_assoc();
        $teamName = $row['teamName'];

        $cheminDossier = "../assets/img/" . $teamName;

        if (!is_dir($cheminDossier)) {
            // Le dossier n'existe pas, nous le créons
            mkdir($cheminDossier, 0777, true);
        }

        $cheminImage = $cheminDossier . "/" . $_FILES["image"]["name"];

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $cheminImage)) {
            echo "L'image a été enregistrée avec succès.";

            header("Location: ../pages/end/"); // Redirection vers la page "redirect.php"
            exit();
        } else {
            header("Location:" . $_SERVER['HTTP_REFERER'] . "?error=25"); // Redirection vers la page "redirect.php"
            exit();
        }
    } else {
        echo "Équipe non trouvée.";
    }

    mysqli_close($conn);
}
?>