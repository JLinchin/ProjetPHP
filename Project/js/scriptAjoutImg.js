function changerImage() {
    var imageForm = document.getElementById('imageForm');
    var imageInput = document.getElementById('imageInput');
    var jaquette = document.getElementById('jaquette');

    // Vérifie si un fichier est sélectionné
    if (imageInput.files.length > 0) {
      var selectedImage = imageInput.files[0];
      var imageUrl = URL.createObjectURL(selectedImage);
      jaquette.src = imageUrl;
    }
  }

  function ouvrirGestionnaireFichier() {
    var imageInput = document.getElementById('imageInput');
    imageInput.click();
  }