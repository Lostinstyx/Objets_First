<?php
date_default_timezone_set('Europe/Paris');
require_once('functions/debug.php');
require_once ('functions/autoloader.php');
spl_autoload_register('classAutoLoader');





/*$voiture1 = new Voiture();

debug($voiture1);

$voiture1->couleur = 'rouge';
$voiture1->masse = 1000;
$voiture1->modele = 'R14';
$voiture1->dimensions = [2000,1500,800];
$dimensions = $voiture1->dimensions;

$voiture = new Voiture('Dacia','Sandero','rouge',[5000,3000,1500],2000,25);
$voiture1 = new Voiture('Lada','Niva','blanc',[4000,2500,1000],1200,30);
$voiture2 = new Voiture('Nissan','Cube','violet',[5000,3000,1500],2500,50);



echo $voiture->CalculerEnergieCinetique().'<br/>';
echo $voiture1->CalculerEnergieCinetique().'<br/>';
echo $voiture2->CalculerEnergieCinetique();


echo $voiture1->getMarque().'<br/>';
$voiture1->setMarque('Tesla');
echo $voiture1->getMarque().'<br/>';
$voiture2->setMarque('Peugeot');
echo $voiture2->getMarque().'<br/>';

$toto = new Coupe('Peugeot','504','Vert',[2000,1000,500], 1200,20);
echo $toto->getNombrePortes().'<br/>';
 $toto->setNombrePortes(4);
 echo $toto->getNombrePortes().'<br/>';

$chat = new Mammiferes();
debug($chat);*/


$formulaire = new Form('index.php','frmContact');
echo $formulaire->displayForm();

