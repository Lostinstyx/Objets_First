<?php


abstract class Animal
{
     protected $_largeur;
     protected $_longueur;
     protected $_hauteur;
     protected $_masse;
     protected $_couleur;
     protected $_genre;
     protected $_locomotion;
     protected $_nom;
     protected $_appareilRespiratoire = true;
     protected $_appareilDigestif = true;

     protected function seNourrir()
     {
        echo 'Je bouffe';
     }

}