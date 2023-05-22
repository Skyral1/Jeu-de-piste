<?php
// Liste des URLs de destination
$destinations = array(
    "../pages/enigme-1/",
    "../pages/enigme-2/",
    "../pages/enigme-3/",
    "../pages/enigme-4/",
    "../pages/enigme-5/",
);

// Vérification des pages déjà visitées
$visitedPages = array();
if (isset($_COOKIE['visited_pages'])) {
    $visitedPages = unserialize($_COOKIE['visited_pages']);
}

// Suppression des destinations déjà visitées de la liste
$remainingDestinations = array_diff($destinations, $visitedPages);

if (count($remainingDestinations) > 0) {
    // Choix aléatoire d'une destination parmi les destinations restantes
    $randomDestination = $remainingDestinations[array_rand($remainingDestinations)];

    // Ajout de la destination à la liste des pages visitées
    $visitedPages[] = $randomDestination;

    // Stockage de la liste des pages visitées dans un cookie
    setcookie('visited_pages', serialize($visitedPages), time() + 7200); // Cookie valide pendant 2 heures

    // Redirection vers la destination aléatoire
    header("Location: " . $randomDestination);
    exit();
} else {
    // Vérification de la dernière page visitée
    $lastVisitedPage = end($visitedPages);
    if ($lastVisitedPage === "../pages/enigme-6/resultat/win.php") {
        // Redirection spécifique lorsque la dernière page visitée est "../pages/enigme-6/resultat/win.php"
        header("Location: ../pages/end/");
    } else {
        // Redirection vers une page spécifique lorsque toutes les destinations ont été visitées
        header("Location: ../pages/enigme-6/");
    }
    exit();
}
?>
