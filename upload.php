<!DOCTYPE html>
<?php
session_start();
include("connection.php");

include("headers.php");

if(!isset($_SESSION['user_email'])){
	header("location:signin.php");
}
else { 
 ?>

<html>
<style >
	.card{
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		max-width: 400px;
		margin: auto;
		text-align: center;
		font-family: arial;
	}
	.card img{
		height: 200px;
	}
	.title{
		color:grey;
		font-size: 18px;
	}
	button{
		border: none;
		outline: 0;
		display: inline-block;
		padding: 8px;
		color: white;
		background-color: #000;
		text-align: center;
		cursor: pointer;
		width: 100%;
		
	}
	#update_profile{
		position: absolute;
		cursor: pointer;
		padding: 10px;
		border-radius: 4px;
		color: white;
		background-color: #000;
	}
	label{
		padding: 10px;
		color: #fff;

	
	}
	input[type="file"]{
		display: none;
	}
	.card-btn{
width: 100%;

padding: 6%;
font-size: 20px;
text-align: center;
color: white;
background-color:black;
border: none;
border-radius: 50px;
transition: 0.2s;
cursor:pointer;
letter-spacing: 0.1rem;

}
.card-btn span{
	margin-left: 1rem;
	transition: 0.2s;
}
.card-btn:hover,.card-btn:active{
	color: #3363ff;
}
.card-btn:hover span,.card-btn:active span{
	margin-left: 1.5rem;
}
.des{
	text-align: center;
	padding: 4px;
	width: 10%;
}
</style>
<head>
	<title>Change Profile Picture</title>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://cdnjd.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="des"><a href="profile.php" class="back-icon"><button  class="card-btn"><i class="fas fa-arrow-left"></i>Back</button>
</a></div>
	<table class="table table-bordered table-hover">
	 			<tr align="center">
	 				<td colspan="6" class="active"><h2>Change Your Profile Image</h2></td>
	 			</tr>
	 			<tr>
	 				<td>
	 	
<?php
$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];
		$user_profile=$row['user_profile'];


		  echo "
                <div class='card'>
                       <img src ='$user_profile'>
                       <h1>$user_name</h1>
                       <form method='post'  enctype='multipart/form-data'>
                       <label style='width:100%;margin-left:-50%;font-size:20px;' id='update_profile'>Select Profile
                       <input type='file' name='u_image' size='600'></label><br>
                       <br>
                       <button style='font-size:20px;margin-top:5%' id='button_profile' name='update'>Update Profile</button>

                       </form>
                </div><br><br>
          ";
                   if (isset($_POST['update'])) {

                   	$u_image= $_FILES['u_image']['name'];
                   	$image_tmp = $_FILES['u_image']['tmp_name'];
                   	$rand = rand(1,100);
                   if($u_image==''){
                   	echo "<script>alert('Please Select Profile')</script>";
                   	echo "<script>window.open('upload.php','_self')</script>";
                   	exit();
                   	
                   }
                   else{
                   	move_uploaded_file($_FILES['u_image']['tmp_name'],"images/$u_image.$rand");
                   	
                   	$update = "update users set user_profile ='images/$u_image.$rand' where user_email='$user' ";
                          $run = mysqli_query($con,$update);

                          if ($run) {
                          	echo "<script>alert('Your Profile updated')</script>";
                          echo "<script>window.open('upload.php','_self')</script>";
                          
                          }
                   }
                   }


	}
?>
</td>
</tr>
</table>
</body>
</html>