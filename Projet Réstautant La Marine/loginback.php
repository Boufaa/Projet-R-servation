<?php 
$bd = new PDO('mysql:host=localhost;dbname=la_marine;charset=utf8','root','');

  session_start();
 

    if(isset($_POST['login_submit'])){
    $user = $_POST['UserName'];
    $pass = $_POST['PassWord'];

    $req = $bd->query('select count(*) from loginadmin where username="'.$user.'" and password="'.$pass.'"');

    $res = $req->fetchColumn();
    if($res == 1){
        $_SESSION['username']=$user;
        header('location:BackEndReservations.php');
    }else{
        header('location: login.php?message=error');
    }

}
   
?>

