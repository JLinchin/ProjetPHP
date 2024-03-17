        <div class="single">
        <h1 class="titreSingle"><?php echo $uneChanson->__get("nom"); ?></h1>
            <div class="infoSingle">
                <img class="imgAlbum" <?php echo "src='" . $unAlbum->__get("lienImage") ."'"; ?> link href="https://www.youtube.com/watch?v=mHONNcZbwDY"></img>
                <div class="infoDuSingle">
                    <h2 class="nomInterprete"><?php echo $unInterprete->__get("nomScene"); ?></h2>
                    <h2 class="titreAlbum"><?php echo $unAlbum->__get("nom"); ?></h2>
                    <h2 class="duree"><?php echo $uneChanson->__get("duree"); ?></h2>
                </div>
            </div>
            <div class="paroles">
                <p><?php echo $uneChanson->__get("paroles"); ?></p>
            </div>
        </div>

        <?php
            if (isset($_SESSION["is_co"]) && $_SESSION["is_co"])
                echo '
                    <div class="button">
                        <div class="wrap">
                        <a href="./?action=modif&idC=' . $uneChanson->__get("id") . '"><button class="btnModif" type="button">Modifier</button></a>
                        <button class="btnSupp" type="button" onclick="supprimer(' . $uneChanson->__get('id') . ')">Supprimer</button>
                    </div>';
        ?>
        </div>