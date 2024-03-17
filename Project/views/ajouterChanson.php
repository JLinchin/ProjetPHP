<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/ajouterChanson.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="insertion">
    <form <?php if ($_GET["action"] == "ajoutC") echo 'action="./?action=ajoutC"'; else echo 'action="./?action=ajoutC&idC=' . $_GET["idC"] . '"'; ?> method="POST">
        <input class="Ajout" type="text" name="Interprete" placeholder="Interprète" <?php if ($_GET["action"] == "modif") echo 'value="' . $unInterprete->__get("nomScene") .'"' ?>>
        <input class="Ajout" type="text" name="Single" placeholder="Titre Single" <?php if ($_GET["action"] == "modif") echo 'value="' . $laChanson->__get("nom") .'"' ?>>
        <input class="Ajout" type="text" name="Duree" placeholder="Durée" <?php if ($_GET["action"] == "modif") echo 'value="' . $laChanson->__get("duree") .'"' ?>>
        <input class="Ajout" type="text" name="DateSortie" placeholder="Date de sortie" <?php if ($_GET["action"] == "modif") echo 'value="' . $laChanson->__get("dateSortie") .'"' ?>>
        <input class="Ajout" type="text" name="Genre" placeholder="Genre" <?php if ($_GET["action"] == "modif") echo 'value="' . $laChanson->__get("genre") .'"' ?>>
        <input class="Ajout" type="text" name="MeilleurePlace" placeholder="MeilleurePlace" <?php if ($_GET["action"] == "modif") echo 'value="' . strval($meilleurePlace) .'"' ?>>
        <input class="Ajout" type="text" name="Parole" placeholder="Parole" <?php if ($_GET["action"] == "modif") echo 'value="' . $laChanson->{"paroles"} .'"' ?>>
        <select class="Ajout" name="Album" placeholder="Album">
            <option value="" disabled selected>Choisissez un album</option>
            <?php foreach ($lesAlbums as $unAlbum)
            {
                if($_GET["action"] == "modif")
                {
                    if ( $laChanson->__get("idAlbum") == $unAlbum->__get("id"))
                        echo "<option value=" . $unAlbum->__get("id") . " selected>" . $unAlbum->__get("nom") . "</option>";
                    else
                        echo "<option value=" . $unAlbum->__get("id") . ">" . $unAlbum->__get("nom") . "</option>";
                }
                else
                    echo "<option value=" . $unAlbum->__get("id") . ">" . $unAlbum->__get("nom") . "</option>";
            } ?>
        </select>
        <button class="valider" type="submit">Valider</button>
    </form>
</div>
