<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once "Models/bd.Album.inc.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nom']) && isset($_FILES['lienImage'])) {
        $nom = $_POST['nom'];
        $lienImage = $_FILES['lienImage'];

        try {
            // Traitement de l'upload de l'image
            $dossierUpload = "Images/"; // Chemin de votre dossier d'upload
            $nomFichier = basename($lienImage['name']);
            $cheminFichier = $dossierUpload . $nomFichier;

            move_uploaded_file($lienImage['tmp_name'], $cheminFichier);

            // Ajout de l'album avec le nom et le chemin de l'image
            addAlbum($nom, $cheminFichier);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

include "$racine/views/entete.php";
include "$racine/views/ajouterAlbum.php";
include "$racine/views/enpied.php";
?>