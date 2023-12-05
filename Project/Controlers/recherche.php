<?php
include_once "../Models/bd.inc.php";

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
} else {
    include_once "../views/entete.php";
    include_once "../views/recherche.php";
    include_once "../views/enpied.php";
}
?>