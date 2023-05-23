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
        <?php
        // Récupérer les données du formulaire
        $avis = $_POST['avis'];
        $note = $_POST['note'];
        $file = "../assets/json/avis.json";

        // Vérifier si le fichier JSON existe
        if (!file_exists($file)) {
            // Créer un tableau vide pour stocker les avis
            $avisExistants = array();
        } else {
            // Charger les avis existants depuis le fichier JSON
            $avisExistants = file_get_contents($file);
            $avisExistants = json_decode($avisExistants, true);
        }

        // Ajouter le nouvel avis à la liste
        $nouvelAvis = array('avis' => $avis, 'note' => $note);
        $avisExistants[] = $nouvelAvis;

        // Enregistrer les avis dans le fichier JSON
        $avisJson = json_encode($avisExistants);
        file_put_contents($file, $avisJson);

        echo "Merci d'avoir soumis votre avis !";
        ?>
    </main>
    <footer>
        <p class="copyright">&copy;Thibault Soquette - Tous droits réservés</p>
    </footer>
</body>

</html>