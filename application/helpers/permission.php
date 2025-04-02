<?php

function estConnecte(){
    return isset($_SESSION['adherent']);
}

function estAdmin(){
    return estConnecte() && $_SESSION['adherent']['email']=='admin';
}

function estConnecteOuRedirection($url,$message = NULL){
    if (estConnecte()) return;
    if ($message != null){
        $_SESSION['info'] = $message;
    }
    header("Location: ".$url);
    exit();
}

function estAdminOuRedirection($url,$message = NULL){
    if (estAdmin()) return;
    if ($message != null){
        $_SESSION['info'] = $message;
    }
    header("Location: ".$url);
    exit();
}
?>