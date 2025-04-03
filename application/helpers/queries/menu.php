<?php
require_once 'application/core/database.php';
require_once 'application/helpers/date.php';

/**
 * Retourne les informations sur les plats du prochain menu (aujourd'hui ou plus tard)
 * 
 * La fonction est utilisée dans la page index
 * 
 * Paramètres
 *   aucun
 *   on utilise la constante CURRENT_DATE pour obtenir la date du jour en php
 * 
 * Résultat
 *   tous les champs des tables plat, repas et menu
 */
function prochainMenu(){
  $pdo = get_pdo();
  $sql = "SELECT * FROM plat JOIN menu ON plat.id = menu.idPlat JOIN repas ON menu.idRepas = repas.id WHERE repas.date = CURRENT_DATE()";
  $query = $pdo->prepare($sql);
  $query->execute();
  return $query->fetchall();
}


/**
 * Retourne les menus pour une semaine
 * 
 * La fonction est utilisée dans la page menu
 * 
 * Retourne un tableau associatif avec les dates de la semaine comme clés.
 * Les valeurs sont les informations sur le repas à cette date, plus un tableau
 * des menus associé à la clé menu
 * 
 * Notes :
 * - La fonction semaine($date) (dans helpers/date.php) fournit un tableau associatif qui peut
 * servir de base (if fournit le titre du repas)
 * - les fonctions php array_key_first() et array_key_last permettent de récupérer les premières et dernières clés,
 *   et donc les premières et dernières dates de la semaine
 * - Un exemple de résultat est donné en commentaire après cette fonction
 * 
 * paramètre
 *   $date : un des jours de la semaine (pas nécessairement le premier)
 * 
 * résultat
 *   tableau associatif $date => $repas
 *   avec en plus dans repas :
 *      'menu' => tableau des menus, avec les plats (tous les champs)
 *     
 */
function menusSemaine($date){
  $semaine = semaine($date);
  $debut = array_key_first($semaine);
  $fin = array_key_last($semaine);
  
  $pdo = get_pdo();

}
/**
 * Résultat de print_r($semaine) sur une réponse valide :
Array
(
    [2025-03-31] => Array
        (
            [titre] => Lundi 31
            [menu] => Array
                (
                    [0] => Array
                        (
                            [idPlat] => 24
                            [description] => Rigatoni culatello e piselli
                            [image] => photos/Rigatoni-culatello-e-piselli.jpg
                            [idMenu] => 7
                        )
                    [1] => Array
                        (
                            [idPlat] => 25
                            [description] => Risotto aux asperges vertes
                            [image] => photos/Risotto-aux-asperges-vertes.jpg
                            [idMenu] => 8
                        )
                )
            [idRepas] => 22
        )
    [2025-04-01] => Array
        (
            [titre] => Mardi 1
            [menu] => Array
                (
                    [0] => Array
                        (
                            [idPlat] => 5
                            [description] => Boeuf bourguignon
                            [image] => photos/Boeuf-bourguignon.jpg
                            [idMenu] => 10
                        )

                    [1] => Array
                        (
                            [idPlat] => 12
                            [description] => Gigot d'agneau de sept heures aux épices et légumes primeurs glacés
                            [image] => photos/Gigot-d-agneau-de-sept-heures-aux-epices-et-legumes-primeurs-glaces.jpg
                            [idMenu] => 37
                        )
                )
            [idRepas] => 23
        )
    [2025-04-02] => Array
        (
            [titre] => Mercredi 2
            [menu] => Array
                (
                    [0] => Array
                        (
                            [idPlat] => 14
                            [description] => Osso buco et gremolata
                            [image] => photos/Osso-bucco-et-gremolata.jpg
                            [idMenu] => 11
                        )
                    [1] => Array
                        (
                            [idPlat] => 11
                            [description] => Esprit bouillabaisse aux trois poissons
                            [image] => photos/Esprit-bouillabaisse-aux-trois-poissons.jpg
                            [idMenu] => 12
                        )
                )
            [idRepas] => 24
        )
    [2025-04-03] => Array
        (
            [titre] => Jeudi 3
            [menu] => Array
                (
                    [0] => Array
                        (
                            [idPlat] => 29
                            [description] => Spaghetti à la tomate, aux asperges et à l'ail confit
                            [image] => photos/Spaghetti-a-la-tomate-aux-asperges-et-a-l-ail-confit.jpg
                            [idMenu] => 13
                        )
                    [1] => Array
                        (
                            [idPlat] => 16
                            [description] => Pie printanière au poulet et légumes
                            [image] => photos/Pie-printaniere-au-poulet-et-legumes.jpg
                            [idMenu] => 14
                        )
                )
            [idRepas] => 25
        )
    [2025-04-04] => Array
        (
            [titre] => Vendredi 4
            [menu] => Array
                (
                    [0] => Array
                        (
                            [idPlat] => 5
                            [description] => Boeuf bourguignon
                            [image] => photos/Boeuf-bourguignon.jpg
                            [idMenu] => 20
                        )
                    [1] => Array
                        (
                            [idPlat] => 7
                            [description] => Colombo de veau aux asperges vertes et épinards
                            [image] => photos/Colombo-de-veau-aux-asperges-vertes-et-epinards.jpg
                            [idMenu] => 21
                        )
                )
            [idRepas] => 26
        )
)
 */
?>