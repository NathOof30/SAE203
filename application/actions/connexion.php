<?php

include("application/helpers/queries/adherent.php");


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
// function adherent($email,$mdp){
//     $pdo = get_pdo();
//     $sql = 'SELECT * FROM adherent
//     WHERE email=?
//     AND mdp=SHA1(?)';
//     $query = $pdo->prepare($sql);
//     $query->execute([$email,$mdp]);
//     $result =  $query->fetchAll();
//     if (count($result)==1) return $result[0];
//     else return NULL;
//   }

$email = $_POST['email'];
$mdp = $_POST['Motdepasse'];


if(adherent($email, $mdp)!= Null){
    echo "2skibidi2";
    $_SESSION['adherent'] = adherent($email, $mdp);
    header("Location: index.php");

}else {
    echo "fck you";
    $_SESSION['info'] = "Le mail et/ou le mot de passe n'existe pas !";
    header("Location: index.php?page=connexion");
}

?>