<?php
include ("application\helpers\queries\adherent.php");

if(existe($_POST["email"])){
    $_SESSION["info"] = "Compte déjà existant";
    header("Location:index.php?page=inscription");
}
else{
    inscription($_POST["nom"], $_POST["email"], $_POST["mdp"]);
    header("Location:index.php"); 
}

?>

