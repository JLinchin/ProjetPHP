<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
    $racine = "..";

include_once "$racine/Models/bd.chansons.inc.php";
include_once "$racine/Models/bd.chanter.inc.php";
include_once "$racine/Models/bd.interprete.inc.php";
include_once "$racine/Models/bd.album.inc.php";

$lesAlbums = getAlbum();

if ($_GET["action"] == "ajoutC")
{
    if (isset($_POST['Interprete']) && isset($_POST['Single']) && isset($_POST['Duree']) && isset($_POST['Album']) && isset($_POST['DateSortie']) && isset($_POST['Genre']) && isset($_POST['MeilleurePlace']) && isset($_POST['Parole']))
    {
        $nomInterprete = $_POST['Interprete'];
        $single = $_POST['Single'];
        $duree = $_POST['Duree'];
        $album = $_POST['Album'];
        $dateSortie = $_POST['DateSortie'];
        $genre = $_POST['Genre'];
        $meilleurePlace = $_POST['MeilleurePlace'];
        $parole = $_POST['Parole'];

        if (getNbInterpretesByNom($nomInterprete) == 0)
        {
            $uninterprete = new Interprete(0, $nomInterprete);
            addInterprete($uninterprete);
        }

        $unInterprete = getInterpretesByNom($nomInterprete);

        try { 
            $uneChanson = new Chanson(0, $single, $dateSortie, $genre, $duree, $meilleurePlace, $parole, $album);
            addChanson($uneChanson);

            $uneChanson = getChansonByTitreDateSort($single, $dateSortie);
            addChanter($uneChanson, $unInterprete);

            echo '<script>location.replace("http://localhost/ProjetPHP/Project");</script>';

        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
        }
    }
}

else
{
    $idChanson = $_GET["idC"];

    echo '<script>
        stateObj = { foo: "?action=modif&idC=' . $idChanson .'"};
        history.pushState(stateObj, "page 2", "?action=detail&idC=' . $idChanson . '");
    </script>';

    $laChanson = getChansonByIdC($idChanson);
    $unInterprete = getInterpreteByIdC($idChanson);

    if (isset($_POST['Interprete']) && isset($_POST['Single']) && isset($_POST['Duree']) && isset($_POST['Album']) && isset($_POST['DateSortie']) && isset($_POST['Genre']) && isset($_POST['MeilleurePlace']) && isset($_POST['Parole']))
    {
        $nomInterprete = $_POST['Interprete'];
        $single = $_POST['Single'];
        $duree = $_POST['Duree'];
        $album = $_POST['Album'];
        $dateSortie = $_POST['DateSortie'];
        $genre = $_POST['Genre'];
        $meilleurePlace = $_POST['MeilleurePlace'];
        $parole = $_POST['Parole'];

        if ($unInterprete->__get["nomScene"] != $nomInterprete)
        {
            if (getNbInterpretesByNom($nomInterprete) == 0)
            {
                $uninterprete = new Interprete(0, $nomInterprete);
                addInterprete($uninterprete);
            }

            $nouvInterprete = getInterpretesByNom($nomInterprete);
            updateChanter($nouvInterprete, $unInterprete, $laChanson);
        }

        try { 
            $uneChanson = new Chanson($idChanson, $single, $dateSortie, $genre, $duree, $meilleurePlace, $parole, $album);
            majChanson($uneChanson);
            echo '<script>location.replace("http://localhost/ProjetPHP/Project");</script>';

        }
        catch (PDOException $e)
        {
            echo "Error:" . $e->getMessage();
        }
    }

    $Interprete = $unInterprete->__get("nomScene");

    $Single = $laChanson->__get("nom");
    $Duree = $laChanson->__get("duree");
    $Album = $laChanson->__get("idAlbum");
    $DateSortie = $laChanson->__get("dateSortie");
    $Genre = $laChanson->__get("genre");
    $meilleurePlace = $laChanson->__get("meilleurePlace");
    $Parole = $laChanson->__get("paroles");
}

include "$racine/views/entete.php";
include "$racine/views/ajouterChanson.php";
include "$racine/views/enpied.php";
?>
