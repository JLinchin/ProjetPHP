<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/pageAcceuil.css" />
  <title>Static Template</title>
  <?php
  require_once '../Models/bd.chansons.inc.php';
  ?>
</head>

<body>
  <div class="container">
    <div class="cover">
    <button class="left" onclick="leftScroll()">
      <i class="fas fa-angle-double-left"></i>
    </button>
    <div class="scroll-images">
      <div class="child" data-title="Nom de la chanson 1">
        <img src="../Images/3.Gang.jpg"></img>
      </div>
      <div class="child">
        <img src="../Images/3.Gang.jpg"></img>
      </div>
      <div class="child">
        <img src="../Images/3.Gang.jpg"></img>
      </div>
      <div class="child">
        <img src="../Images/3.Gang.jpg"></img>
      </div>
      <div class="child">
        <img src="../Images/3.Gang.jpg"></img>
      </div>
      <div class="child">
        <img src="../Images/3.Gang.jpg"></img>
      </div>
      <div class="child">
        <img src="../Images/3.Gang.jpg"></img>
      </div>
      <div class="child">
        <img src="../Images/3.Gang.jpg"></img>
      </div>
      <div class="child">
        <img src="../Images/3.Gang.jpg"></img>
      </div>
    </div>
    <button class="right" onclick="rightScroll()">
      <i class="fas fa-angle-double-right"></i>
    </button>
  </div>
  </div>
  <script src="script.js"></script>
</body>
</html>