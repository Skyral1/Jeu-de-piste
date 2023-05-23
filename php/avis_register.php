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