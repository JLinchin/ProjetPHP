<?php
include_once "Models/bd.chansons.inc.php"; // Inclure le fichier contenant votre modèle
include_once "Models/bd.album.inc.php"; // Inclure le fichier contenant votre modèle

$chansons = getChansonsRandom(); // Appeler la fonction pour récupérer les chansons aléatoires
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/pageAcceuil.css" />
  <script src="js/script.js"></script>
  <title>Static Template</title>
</head>

<body>
<div class="container">
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
        if ($lienImage) {
            // Afficher l'image de l'album si le lien est valide
            echo "<img src='" . $lienImage['lienImage'] . "' alt=''>";
        } else {
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
</body>
</html>