<?php

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";
include_once "$racine/Models/bd.inc.php";

if (isset($_POST['zoneRecherche'])) {
    $zoneRecherche = $_POST['zoneRecherche'];

    try {
        $conn = connexionPDO();
        $Query = "SELECT nom FROM chanson WHERE nom LIKE :zoneRecherche LIMIT 5";

        $stmt = $conn->prepare($Query);
        $stmt->bindValue(':zoneRecherche', '%' . $zoneRecherche . '%', PDO::PARAM_STR);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo '<ul>';
            while ($Result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <li>
                    <a href=https:/www.google.fr>
                        <?php echo $Result['nom']; ?>
                    </a>
                </li>
                <?php
            }
            echo '</ul>';
        } else {
            echo 'Aucun résultat trouvé.';
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
<<<<<<< HEAD
}
    include_once "../views/entete.php";
    include_once "../views/recherche.php";
    include_once "../views/enpied.php";
=======
} else {
    include_once "$racine/views/entete.php";
    include_once "$racine/views/recherche.php";
    include_once "$racine/views/pageAcceuil.php";
    include_once "$racine/views/enpied.php";
}
>>>>>>> main
?>