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

$voiture = new Voiture('Dacia','Sandero','rouge',[5000,3000,1500],2000,25);
$voiture1 = new Voiture('Lada','Niva','bla,c',[4000,2500,1000],1200,30);
$voiture2 = new Voiture('Nissan','Cube','violet',[5000,3000,1500],2500,50);


/*
echo $voiture->CalculerEnergieCinetique().'<br/>';
echo $voiture1->CalculerEnergieCinetique().'<br/>';
echo $voiture2->CalculerEnergieCinetique();
*/

echo $voiture1->getMarque();
$voiture1->setMarque('Tesla');
echo $voiture1->getMarque();