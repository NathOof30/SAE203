<?php
require_once 'application/helpers/queries/plat.php';

$plats = tous_plats_date();
echo $blade->run('carte', compact('plats'));

?>