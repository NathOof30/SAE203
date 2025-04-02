<?php
require_once 'application/core/database.php';


/**
 * Récupère les informations sur un adherent, ou NULL si email/mdp pas dans la base
 * 
 * Fonction utilisée dans les actions inscriptions et connexion
 * 
 * Le mot de passe est chiffré avec SHA1
 * 
 * paramètres
 *   $email
 *   $mdp
 * 
 * $résultat
 *   un tableau associatif correspondant à l'adhérent dans la base ou NULL 
 */
function adherent($email,$mdp){
  $pdo = get_pdo();
  $sql = 'SELECT * FROM adherent
  WHERE email=?
  AND mdp=SHA1(?)';
  $query = $pdo->prepare($sql);
  $query->execute([$email,$mdp]);
  $result =  $query->fetchAll();
  if (count($result)==1) return $result[0];
  else return NULL;
}

/**
 * Teste si un email existe déjà dans la base
 * 
 * Fonction utilisée dans l' actions inscriptions
 * 
 * paramètre
 *   $email
 * 
 * résultat
 *   booléen (vrai ou faux)
 */
function existe($email){
  $pdo = get_pdo();
  $sql = 'SELECT * FROM adherent
  WHERE email=?';
  $query = $pdo->prepare($sql);
  $query->execute([$email]);
  $result =  $query->fetchAll();
  return (count($result)==1);
}

/**
 * Inscrit un utilisateur (dont le mail n'est pas déjà dans la base)
 * 
 * Fonction utilisée dans l' actions inscriptions
 * 
 * Le mot de passe sera chiffré avec SHA1
 * 
 * paramètres
 *   $nom
 *   $email
 *   $mdp
 * 
 * résultat
 *   l'id de la ligne ajoutée (via $pdo->lastInsertId())
 *   
 */
function inscription($nom,$email,$mdp){
  $pdo = get_pdo();
  $sql = 'INSERT INTO adherent(nom,email,mdp)
  VALUES(?,?,SHA1(?))';
  $query = $pdo->prepare($sql);
  if (!$query->execute([$nom,$email,$mdp])) return NULL;
  return $pdo->lastInsertId();
}

?>