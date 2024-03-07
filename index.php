<?php 
require_once('classes/Fighter.php');
require_once('classes/Fight.php');
//TO-DO: Input restrictions
$fighter1 = new Fighter("Pepe",6,3);
$fighter2 = new Fighter("Paco",6,4);

$fight = new Fight($fighter1, $fighter2);

$fight->fight();


?>