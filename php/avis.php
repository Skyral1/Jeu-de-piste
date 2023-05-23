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
        <p>
            <?php
            // Charger les avis depuis le fichier JSON
            $file = "../assets/json/avis.json";

            if (file_exists($file)) {
                $avisExistants = file_get_contents($file);
                $avisExistants = json_decode($avisExistants, true);

                $totalAvis = count($avisExistants);
                $sommeNotes = 0;

                // Calculer la somme des notes
                foreach ($avisExistants as $avis) {
                    $sommeNotes += $avis['note'];
                }

                // Calculer la moyenne des notes
                $moyenne = $sommeNotes / $totalAvis;

                // Arrondir la moyenne à la dizaine
                $moyenneArrondie = round($moyenne); // $moyenne, 2 pour afficher les virgules
            
                echo "La moyenne des avis est de : " . $moyenneArrondie . " étoiles";

                // Afficher la liste complète des avis
                if ($totalAvis > 0) {
                    echo "<h2>Liste des avis :</h2>";
                    echo "<ul>";
                    foreach ($avisExistants as $avis) {
                        echo "<li>Avis : " . $avis['avis'] . "</br> Note : " . $avis['note'] . "</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>Aucun avis pour l'instant.</p>";
                }
            } else {
                echo "<p>Aucun avis pour l'instant.</p>";
            }
            ?>
        </p>
    </main>
    <footer>
        <p class="copyright">&copy;Thibault Soquette - Tous droits réservés</p>
    </footer>
</body>

</html>