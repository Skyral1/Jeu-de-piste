<?php
// Vérifier les informations de connexion
$username = $_POST['username'];
$password = $_POST['password'];

// Vérifier si les informations sont correctes
if ($username === 'Skyral' && $password === 'admin' || $username === 'prof' && $password === 'paris') {
    // Informations de connexion correctes
    session_start();
    $_SESSION['username'] = $username;
    header('Location: index.php');
} else {
    // Informations de connexion incorrectes
    header('Location: login.php?error=1');
}
?>