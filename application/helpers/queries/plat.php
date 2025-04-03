<?php
require_once 'application/core/database.php';

/**
 * retourne un certain nombre de plats, choisis au hasard
 * 
 * La fonction est Utilisée dans la pgae index
 * 
 * paramètres
 *   $nombre : le nombre de plats dans la réponse
 * 
 * résultat
 *   tous les champs de la table plat
 * 
 */
function plats_aleatoires($nombre){
  $pdo = get_pdo();
  $sql = "SELECT * FROM plat ORDER BY RAND() LIMIT ?";
  $query = $pdo->prepare($sql);
  $query->execute([$nombre]);
  return $query->fetchAll();
}

/**
 * Liste tous les plats par ordre alphabétique, avec la date du prochain menu pour chacune
 * 
 * La fonction est utilisée dans la page carte
 * 
 * paramètres
 *   aucun
 * 
 * résultat
 *   tous les champs de la table plat
 *   date : la date du prochain menu avec ce plat, si elle existe
 */
function tous_plats_date(){
  $pdo = get_pdo();
  $sql = "SELECT plat.description, plat.image, day(date), monthname(date) FROM plat join repas on repas.id = plat.id group by repas.id;";
  $query = $pdo->prepare($sql);
  $query->execute();
  return $query->fetchAll();
}


?>