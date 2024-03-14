<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

        <link rel="stylesheet" href="css/entete.css">
        <link rel="stylesheet" href="css/pageAcceuil.css"/>
        <link rel="stylesheet" href="css/recherche.css">
        <link rel="stylesheet" href="css/Connexion.css">
        
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css"/>

        <title>Le meilleur des années 80</title>
    </head>
    <body>
        <nav class="main-navigation">
            <div class="navbar-header animated fadeInUp">
                <img class="logo" src="Assets/Logo-modified.png">
            </div>
            <ul class="nav-list">
                <li class="nav-list-item">
                    <a href= "./?action=recherche" class="nav-link">Accueil</a>
                </li>
                <li class="nav-list-item">
                    <a href="./?action=ajoutC" class="nav-link">Ajouter Chanson</a>
                </li>
                <li class="nav-list-item">
                    <a href="./?action=ajoutA" class="nav-link">Ajouter Album</a>
                </li>
                <li class="nav-list-item">
                    <?php
                        if ((isset($_SESSION["is_co"]) && $_SESSION["is_co"] == false) || !isset($_SESSION["is_co"]))
                            echo '<a href="./?action=connexion" class="nav-link">Connexion</a>';
                        else
                            echo '<a href="./?action=deconnexion" class="nav-link" title="déconnexion">' . $_SESSION["prenom"] . " ". $_SESSION["nom"] . '</a>';
                    ?>
                </li>
            </ul>
        </nav>