<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

// Afficher un message de bienvenue
// echo 'Bienvenue, ' . $_SESSION['username'] . '!';
?>

<?php
phpinfo()
    ?>