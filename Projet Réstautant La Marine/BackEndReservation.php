<?php
 class Reservation{

    function __construct() {
      $this->conn = new mysqli("localhost","root","","la_marine");
    }


function reservation_show_all() {

      $query = "SELECT * from reservation";
      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      $result = $stmt->get_result();
      return  $result;
        
    }
  }

?>