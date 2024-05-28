
<?php  

include("connection.php");




if(isset($_POST['sign_in'])){
session_start();


	$email =htmlentities(mysqli_real_escape_string ($con,$_POST['user_email']));	
	$pass1 = htmlentities(mysqli_real_escape_string ($con,$_POST['user_upswd1']));

	$select_user = "select * from users where user_email='$email' and  user_upswd2='$pass1'";

	$query = mysqli_query($con,$select_user);
	$check_user = mysqli_num_rows($query);

	if ($check_user == 1) 
	{
		$_SESSION['user_email'] = $email;

		$update_msg = mysqli_query($con,"UPDATE users SET log_in = 'Online' WHERE user_email ='$email'");
		
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];

		 echo "<script>alert('sorry $user_name']')</script>";


		echo "<script>window.open('profile.php?:user_name=$user_name','_self')</script>";	
		
	}
	else{
		echo "
              <div class='alert alert-danger'>
              <strong>Check Your Email and password</strong>
		</div>
		";
	
			
	}
	
}

?>