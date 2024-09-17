<?php


class Reservation {

    private Client $_client;
    private Vehicule $_vehicule;
    private DateTime $_dateStart;
    private DateTime $_dateEnd;
    private int $_price;



    public function __construct(Client $client, Vehicule $vehicule, string $dateStart, string $dateEnd, int $price) {
        $this->_client = $client;
        $this->_vehicule = $vehicule;
        $this->_dateStart = new DateTime($dateStart);
        $this->_dateEnd = new DateTime($dateEnd);
        $this->_price = $price;
        $this->_client->addReservation($this);
    }

    public function getClient() {
        return $this->_client;
    }
    public function getVehicule() {
        return $this->_vehicule;
    }
    public function getDateStart() {
        return $this->_dateStart;
    }
    public function getDateEnd() {
        return $this->_dateEnd;
    }
    public function getPrice() {
        return $this->_price;
    }



    public function setClient(Client $client) {
        $this->_client = $client;
    }
    public function setBedroom(Vehicule $vehicule) {
        $this->_vehicule = $vehicule;
    }
    public function setDateStart(string $dateStart) {
        $this->_dateStart = new DateTime($dateStart);
    }
    public function setDateEnd(string $dateEnd) {
        $this->_dateEnd = new DateTime($dateEnd);
    }

    public function __toString() {
        return $this->getDateStart()->format('d-m-Y')." au ".$this->getDateEnd()->format('d-m-Y');
    }

}

    