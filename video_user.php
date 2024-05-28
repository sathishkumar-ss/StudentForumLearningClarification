<!DOCTYPE html>
<html>
<?php
session_start();



include("connection.php");
include("headers.php");

if(!isset($_SESSION['user_email'])){
  header("location: signin.php");
}
else {
    
              $user = $_SESSION['user_email'];
              $get_user = "select * from users where user_email='$user'";
              $run_user = mysqli_query($con,$get_user);
              $row_user = mysqli_fetch_array($run_user);

                    $user_dept = $row_user['user_dept'];

                    if ($user_dept == "Mechanical Engineering"){
                    echo "<script>window.open('video_mec.php','_self')</script>";}

                    elseif($user_dept == "Electronic and Electrical Engineering"){
                    echo "<script>window.open('video_elec.php','_self')</script>"; }

                        elseif($user_dept == "Civil Engineering"){
    echo "<script>window.open('video_civil.php','_self')</script>";}
                    elseif($user_dept == "Computer Engineering"){
                        echo "<script>window.open('video_com.php','_self')</script>";}
                                    
                   else{
                   echo "<script>window.open('profile.php','_self')</script>";
						
 echo "<script>alert('Sorry ,we cant't find youe subject(^-^))</script>";
               }        
            }
            

         
                        
   ?>