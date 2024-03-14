    <div class="container">
      <div class="container h-100">
        <div class="d-flex justify-content-center h-25">
          <div class="searchbar">
            <input class="search_input" type="text" name="" placeholder="Recherche" id="zoneRecherche" oninput="search()">
            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            <div id="display"></div>
          </div>
        </div>
      </div>

        <div class="cover">
            <button class="left" onclick="leftScroll()">
                <i class="fas fa-angle-double-left"></i>
            </button>
            <div class="scroll-images">
                <?php foreach ($chansons as $chanson): ?>
                <div class="child">
                    <?php
                        // Récupérer le lien de l'image de l'album pour cette chanson
                        $lienImage = getImageByChanson($chanson->id);
                        // Vérifier si le lien de l'image de l'album est valide
                        if ($lienImage)
                        {
                            // Afficher l'image de l'album si le lien est valide
                            echo "<img src='" . $lienImage['lienImage'] . "' alt=''>";
                        }
                        else
                        {
                            // Afficher une image par défaut si le lien n'est pas valide
                            echo "<img src='chemin/vers/image/default.jpg' alt='Image par défaut'>";
                        }
                    ?>
                    <p><?php echo $chanson->{'nom'}; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="right" onclick="rightScroll()">
                <i class="fas fa-angle-double-right"></i>
            </button>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a59b9b09ab.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/script.js"></script>