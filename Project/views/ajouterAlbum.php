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
    <form id="imageForm">
      <input class="Ajout" type="text" name="Nom" placeholder="Nom">
      <label for="imageInput" class="Txt">Sélectionner une image</label>
      <input type="file" id="imageInput" accept="image/*" style="display: none">
      <button class="valider" type="button" onclick="changerImage()">Valider</button>
    </form>
    
  </div>

  

</body>