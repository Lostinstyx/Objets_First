<?php


class Voiture
{

    private $_marque;
    public $_modele;
    public $_couleur;
    public $_dimensions = [0,0,0];
    public $_masse;
    public $_vitesse = 0;

    public function getMarque()
    {
    return $this->_marque;
    }

    public function setMarque($marque) : void
    {
    $this->_marque = $marque;
    }

    public function __construct(string $marque, string $modele,string $couleur, array $dimensions, int $masse,int $vitesse)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_couleur = $couleur;
        $this->_dimensions = $dimensions;
        $this->_masse = $masse;
        $this->_vitesse = $vitesse;
    }

    public function CalculerEnergieCinetique() : float
    {
       return 0.5 * $this->_masse * $this->_vitesse ** 2;
    }
}