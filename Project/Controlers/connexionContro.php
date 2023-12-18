<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__)
$racine = "..";

include_once "$racine/Models/bd.user.inc.php";

include "$racine/views/entete.php";
include "$racine/views/connexion.php";
include "$racine/views/enpied.php";
?>