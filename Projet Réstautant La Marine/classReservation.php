<?php
 
class Reservation {
     
    
    public $reservation_date;
	public $reservation_heure;
	public $reservation_personne;
	public $reservation_nom;
	public $reservation_email;
	public $reservation_phone;
	public $reservation_message;
     
     
    public function inserer() {
 
    $connection = new mysqli("localhost","root","","la_marine");
     
    $connection->exec("INSERT INTO reservation VALUES('" . $this->reservation_date . "','" . $this->reservation_heure . "','" . $this->reservation_personne . "','" . $this->reservation_nom . "','" . $this->reservation_email . "','" . $this->reservation_phone . "','" . $this->reservation_message . "')");
    }  
}
 
 
 
 
?>