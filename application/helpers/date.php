<?php
function semaine($date){
  $semaine = explode(' ','Lundi Mardi Mercredi Jeudi Vendredi');
  $jour = (int) date('N',strtotime($date)); // 1 -> lundi;
  $result = [];
  for($i=0;$i<=4;$i++){
    $j = ajout($date,$i-$jour+1);
    $result[$j]= ['titre' => $semaine[$i].' '.date('j',strtotime($j))];
  }
  return $result;
}

 ?>
