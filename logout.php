<?php
session_start();



include("connection.php");

    
              $user = $_SESSION['user_email'];
              $get_user = "select * from users where user_email='$user'";
              $run_user = mysqli_query($con,$get_user);
              $row_user = mysqli_fetch_array($run_user);
                         	$update="update users set log_in='Offline'  where user_email='$user'";


                     	
$run = mysqli_query($con,$update);


session_destroy();
header("location: signin.php") or  die("connection was not established");
?>

