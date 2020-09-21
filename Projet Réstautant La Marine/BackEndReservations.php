<?php
include('BackEndReservation.php');

session_start();
if(empty($_SESSION)){
    header('location: BackEndReservations.php');
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admins</title>
	<!-- Favicon -->
    <link rel="shortcut icon" href="images/x-icone.jpg" type="image/x-icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



	<div class="col-md-12 well" >
		<div class="user-login">
            <?php if(!empty($_SESSION)): ?>
            <a href="logout.php" class="single-icon" style="font-size: 30px; position: absolute; color: #000; top: 20px; right: 15px;"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
            <?php endif; ?>
        </div>
		<br><br><br>
				<h3 style="color: #000; text-align: center;">List des Reservations Desponible</h3>
				<br/>
				<!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span
						class="glyphicon glyphicon-plus"></span> Ajouter des vols</button> -->
				<br /><br />
				<table class="table " id="table" >
					<thead class="alert-success">
						<tr>
							<th>Date Reservation</th>
							<th>Heur du Reservation</th>
							<th>Personne(s)</th>
							<th>Nom</th>
							<th>Email</th>
							<th>Télephone</th>
							<th>Message</th>
							<th>Supprimer la Reservation</th>
						</tr>
					</thead>
					<tbody style="background-color:#fff;">
						<?php

						$Reservation = new Reservation();
   						$res = $Reservation -> reservation_show_all();
					
					while($fetch = mysqli_fetch_array($res)){
				?>
						<tr id="delete<?php echo $fetch['id'] ?>">
							<td><?php echo $fetch['date_reservation']?></td>
							<td><?php echo $fetch['heur_reservation']?></td>
							<td><?php echo $fetch['personne']?></td>
							<td><?php echo $fetch['nom']?></td>
							<td><?php echo $fetch['email']?></td>
							<td><?php echo $fetch['phone']?></td>
							<td><?php echo $fetch['message']?></td>
							<td><button onclick="deleteAjax(<?php echo $fetch['id']; ?>)" class="btn btn-warning" data-toggle="modal" type="button">
							Supprimer</button></td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>






<script type="text/javascript">
	 
	 function deleteAjax(id){
   
       if(confirm('are You sure?')){
         
         $.ajax({

              type:'post',
              url:'deletereservation.php',
              data:{delete_id:id},
              success:function(data){
              
                   $('#delete'+id).hide('slow');

              }

         });

       }


	 }

</script>
  </div>
<!-- now need jquery cdn -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script> -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>



</body>
</html>