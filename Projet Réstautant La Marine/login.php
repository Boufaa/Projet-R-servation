<?php
include('connection.php');
include('loginback.php');

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Favicon -->
<link rel="shortcut icon" href="images/x-icone.jpg" type="image/x-icon">
<title>Login form 2 </title>
<link rel="stylesheet" type="text/css" href="css/styleLogin.css">
</head>
<body>

  <section class="login-page">
  	 <form method="POST">
  	 	 <div class="box">
  	 	 	   <div class="form-head">
  	 	 	   	  <h2>Admin Login</h2>
  	 	 	   </div>
  	 	 	   <div class="form-body">
  	 	 	   	  <input type="text" name="UserName" placeholder="Enter name" />
  	 	 	   	  <input type="Password" name="PassWord" placeholder="Password" />
  	 	 	   </div>
  	 	 	   <div class="form-footer">
  	 	 	   	  <button type="submit" name="login_submit">Sign In</button>
  	 	 	   </div>
  	 	 </div>
  	 </form>
  </section>

</body>
</html>
