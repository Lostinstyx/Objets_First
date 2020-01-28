<?php
require('classes/Voiture.php');
require('functions/debug.php');


/*$voiture1 = new Voiture();

debug($voiture1);

$voiture1->couleur = 'rouge';
$voiture1->masse = 1000;
$voiture1->modele = 'R14';
$voiture1->dimensions = [2000,1500,800];
$dimensions = $voiture1->dimensions;*/

$voiture = new Voiture('Dacia','Sandero','rouge',[5000,3000,1500],'2000','0');

debug($voiture);

