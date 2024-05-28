<?php
include("connection.php");
if (isset($_POST['sign_up'])) {

	$name = htmlentities(mysqli_real_escape_string($con,$_POST['user_name']));
	$email = htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
    $gender = htmlentities(mysqli_real_escape_string($con,$_POST['user_gender']));
	$dept = htmlentities(mysqli_real_escape_string($con,$_POST['user_dept']));
	$registerno = htmlentities(mysqli_real_escape_string($con,$_POST['user_regno']));	
	$pass1 = htmlentities(mysqli_real_escape_string($con,$_POST['user_upswd1']));
	$pass2 = htmlentities(mysqli_real_escape_string($con,$_POST['user_upswd2']));
	$profile_pic ="profile1.png";

			if ($name == '') {
				echo "<script>alert('we can not verfy your name')</script>";
				}	

				if (strlen($pass1)<=8) {
				echo "<script>alert('password should be minimum 8 characters!')</script>";
				echo "<script>window.open('signup.php','_self')</script>";
						
				exit();

					# code...
				}
				if ($pass1!=$pass2) {
				echo "<script>alert('password was not same')</script>";
				echo "<script>window.open('signup.php','_self')</script>";
						

					# code...
				}
				$check_email = "select * from users where user_email = '$email'";
				$run_email = mysqli_query($con,$check_email);

				$check = mysqli_num_rows($run_email);
            
            if($check==1){
 echo "<script>alert('Email aldery exist,please try again!')</script>";
echo "<script>window.open('signup.php','_self')</script>";
						exit(); 
						          }
						          $check_reg = "select * from users where user_regno = '$registerno'";
				$run_reg = mysqli_query($con,$check_reg);

				$check = mysqli_num_rows($run_reg);
            
            if($check==1){
 echo "<script>alert('REgister Number aldery exist,please try again!')</script>";
echo "<script>window.open('signup.php','_self')</script>";
						exit(); 
						          }
			
			$insert = "insert into users (user_name,user_email,user_gender,user_dept,user_regno,user_upswd1,user_upswd2,user_profile) values('$name','$email','$gender','$dept','$registerno','pass1','$pass2','$profile_pic')";

			  $query = mysqli_query($con,$insert);
			  $query_check=1;

			  if($query_check==1){
			  
echo "<script>window.open('signin.php','_self')</script>";
 echo "<script>

 alert('Congratulations $name,your account has been created successfully')
 </script>";


						exit(); 
						  }
						  else{
echo "<script>window.open('signup.php','_self')</script>";
						
 echo "<script>alert('Registration Failed,try again! Don't give up(^-^))</script>";
}
}

 ?>
