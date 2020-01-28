<?php


final class Coupe extends Voiture
{
 protected $_nombrePortes = 2;

 public function getNombrePortes()
 {
     return $this->_nombrePortes;
 }

 public function setNombrePortes($NbPortes)
 {
     $this->_nombrePortes =  $NbPortes;
 }

}
