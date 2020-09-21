<?php
     
     
$bd = new PDO('mysql:host=localhost;dbname=la_marine;charset=utf8','root','');





 if(isset($_POST['submit'])){
   
    $reservation_date = $_POST['date'];
    $reservation_heure = $_POST['heure'];
    $reservation_personne = $_POST['personne'];
    $reservation_nom = $_POST['nom'];
    $reservation_email = $_POST['email'];
    $reservation_phone = $_POST['phone'];
    $reservation_message = $_POST['message'];









  

    $req = $bd->prepare('insert into reservation (date_reservation,heur_reservation,personne,nom,email,phone,message) values(?,?,?,?,?,?,?)');
    $req->execute([$reservation_date,$reservation_heure,$reservation_personne,$reservation_nom,$reservation_email,$reservation_phone,$reservation_message]);
 
    header('location:Reservation.php');
}
 
?>