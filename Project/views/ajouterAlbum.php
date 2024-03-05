
<script src ="js/scriptAjoutImg"></script>
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/ajouterAlbum.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
          
<div class="insertion">
        <div class="img">
            <img id="jaquette" class="jaquette" src="Assets/Jaquette.jpg" alt="Jaquette" onclick="ouvrirGestionnaireFichier()" />
        </div>
        <form method="post" action="ajouterAlbumContro.php" enctype="multipart/form-data">
            <input class="Ajout" type="text" name="nom" placeholder="Nom de l'album" required>
            <label for="imageInput" class="Txt" name="image">Sélectionner une image</label>
            <input type="file" id="imageInput" accept="image/*" style="display: none" name="lienImage" required>
            <button class="valider" type="submit">Valider</button>
        </form>
    </div>

  

</body>