<?php 
require_once('classes/Fighter.php');
require_once('classes/Fight.php');
//TO-DO: Input restrictions
$fighter1 = new Fighter("Pepe",5,1);
$fighter2 = new Fighter("Paco",5,2);

$fight = new Fight($fighter1, $fighter2);

$fight->fight();


?>