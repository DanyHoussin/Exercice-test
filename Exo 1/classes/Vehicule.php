<?php


class Vehicule {

    private string $_marque;
    private string $_modele;
    private string $_immatriculation;
    private bool $_disponibiliter;


    public function __construct(string $marque, string $modele, string $immatriculation, bool $disponibiliter) {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_immatriculation = $immatriculation;
        $this->_disponibiliter = $disponibiliter;
    }

    public function getMarque() {
        return $this->_marque;
    }
    public function getModele() {
        return $this->_modele;
    }
    public function getImmatriculation() {
        return $this->_immatriculation;
    }
    public function getDisponibiliter() {
        return $this->_disponibiliter;
    }


    public function setMarque(string $marque) {
        $this->_marque = $marque;
    }
    public function setModele(string $modele) {
        $this->_modele = $modele;
    }
    public function setImmatriculation(string $immatriculation) {
        $this->_immatriculation = $immatriculation;
    }
    public function setDisponibiliter(int $disponibiliter) {
        $this->_disponibiliter = $disponibiliter;
    }

    

}