<?php 

session_start();
//Supprimer les variables de session
session_unset();
//Detruire la session
session_destroy();

header("location: index.php");

?>