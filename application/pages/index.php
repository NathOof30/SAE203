<?php
require_once 'application/helpers/queries/plat.php';
require_once 'application/helpers/queries/menu.php';

$plats = plats_aleatoires(6);

$menu = prochainMenu();

echo $blade->run('index',compact('plats', 'menu'));

?>