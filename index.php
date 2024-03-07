<?php 
include_once('classes/Fighter.php');
//TO-DO: Input restrictions
$fighter1 = new Fighter("Pepe",7,3);
$fighter2 = new Fighter("Paco",6,4);

var_dump($fighter1->getName());
var_dump($fighter2->getName());


?>