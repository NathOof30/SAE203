<?php
require_once 'application/core/database.php';
require_once 'application/helpers/date.php';

/**
 * Liste des plats sélectionnés par un adhérent entre deux dates
 * 
 * La fonction est utilisée dans les pages menu et perso
 * 
 * paramètre
 *   $idAdherent
 *   $debut (par defaut aujourd'hui)
 *   $fin (par défaut un mois après $debut)
 * 
 * résultat
 *   repas : tous les champs
 *   plat : image et description
 *   selection : idMenu
 */
function selections($idAdherent, $debut = CURRENT_DATE, $fin = NULL){
  $fin = $fin ?? ajout($debut,31);
  $pdo = get_pdo();

}

/**
 * Selection d'un menu par un adherent
 * 
 * La fonction est utilisée dans l'action selection
 * 
 * Un seul menu peut être sélection pour un jour donné.
 * Il faut donc commencer par supprimer toutes les sélections pour cet adhérent et ce jour
 * Si idMenu est "NULL", on s'arrête là. Sinon, on insère la nouvelle sélection
 * 
 * paramètres
 *   $idAdherent
 *   $idMenu
 *   $date
 * 
 * résultat
 *   aucun
 */
function selection($idAdherent, $idMenu, $date){
  $pdo = get_pdo();

}

/**
 * Supprime la sélection d'un menu par un adhérent
 * 
 * La fonction est utilisée dans l'action supprimerSelection
 * 
 * paramètres
 *   $idAdherent
 *   $idMenu
 * 
 * résultat
 *   aucun
 */
function supprimerSelection($idAdherent,$idMenu){
  $pdo = get_pdo();

}


?>