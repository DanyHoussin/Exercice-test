<?php


class Client {

    private string $_nom;
    private string $_prenom;
    private string $_email;
    private int $_phoneNumber;
    private array $reservations = array();


    public function __construct(string $nom, string $prenom, string $email, int $phoneNumber) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_email = $email;
        $this->_phoneNumber = $phoneNumber;
    }

    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }
    public function getEmail() {
        return $this->_email;
    }
    public function GetPhoneNumber() {
        return $this->_phoneNumber;
    }


    public function setNom(string $nom) {
        $this->_nom = $nom;
    }
    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }
    public function setEmail(string $email) {
        $this->_email = $email;
    }
    public function setPhoneNumber(int $phoneNumber) {
        $this->_phoneNumber = $phoneNumber;
    }

    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }

    public function displayReservation(){
        if(count($this->reservations) > 0){
            $result = '<h2>'."Réservations de ".$this->getNom()." ".$this->getPrenom().'<br></h2>';
            $result .=  '<span class=green>'.count($this->reservations)." RESERVATIONS".'</span>'."<br>";
        foreach($this->reservations as $reservation) {
            $result .= "Modèle : ".$reservation->getVehicule()->getModele()." / Marque : ".$reservation->getVehicule()->getMarque()." / Prix : ".$reservation->getPrice()." € / Date : ".$reservation->__toString()."<br>";
        }
        } else {
            $result .= '<h2>'."Réservations de ".$this->getNom().'<br></h2>';
            $result .= "Aucune réservation !";
        }
        return $result;
    }

}