<!-- include database -->

<?php

 
 $con = mysqli_connect("localhost","root","","la_marine");
 if(!$con){

    echo "failed to connect";
 }


 
 
  // sorry need to get id 

  $id = $_POST['delete_id'];
  $query = mysqli_query($con,"DELETE FROM reservation WHERE id='$id'");

  

 ?>