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
<head>
	<title>Profile</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://cdnjd.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style type="text/css">
	.down:hover{

cursor:pointer;
    transform: translateY(-0.5%);
box-shadow: 2px 2px 10px black;

	}
</style>
</head>
<body>
<div class="row">
	<div class="col-sm-2"></div>
	<?php   
              $user = $_SESSION['user_email'];
              $get_user = "select * from users where user_email='$user'";
              $run_user = mysqli_query($con,$get_user);
              $row_user = mysqli_fetch_array($run_user);

              $user_name = $row_user['user_name'];
              $user_email = $row_user['user_email'];
              $user_upswd2 = $row_user['user_upswd1'];
		      $user_profile = $row_user['user_profile'];
		      $user_dept = $row_user['user_dept'];
  		      $user_gender = $row_user['user_gender'];
	          $user_id = $row_user['user_id'];
	                
	 ?>
	 <div class="col-sm-8">
	 	<form action="" method="post" enctype="multiparrt/form-data">
	 		<table class="table table-bordered table-hover">
	 			<tr align="center">
	 				<td colspan="6" class="active"><h2>Profile</h2></td>
	 			</tr>
	 			<tr>
	 				<td style="font-weight: bold;"> Username</td>
	 				<td>
	 					<input type="text" name="u_name" class="form-control" required value="<?php 
	 					                echo $user_name; ?>">
	 				</td>
	 			</tr>
                      <tr><td style="font-weight: bold;">User Profile</td>
	 				<td> <?php  echo "<img src ='$user_profile' width='100px' height='100px'>"; ?> <a  class="btn btn-default" style="text-decoration:none;font-size: 15px; " href="upload.php"><i class="fa fa-user" aria-hidden="true"></i>Change Profile</a></td></tr>

                     <tr>
	 				<td style="font-weight: bold;"> Email</td>
	 				<td>
	 					<input type="email" name="u_name" class="form-control" required value="<?php 
	 					                echo $user_email; ?>" />
	 				</td>
	 			</tr>
	 			<tr>
	 				<td style="font-weight: bold;"> Department</td>
	 				<td>
	 					<select class="form-control" name="u_dept">
	 						<option><?php echo $user_dept; ?></option>
	 						<option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Electronic and Electrical Engineering">Electronic and Electrical Engineering</option>
            <option value="Civil Engineering">Civil Engineering</option>
            <option value="Computer Engineering">Computer Engineering</option>
            <option value="Plastic Engineering">Plastic Engineering</option>
            <option value="Polimer Engineering">Polimer Engineering</option>
            
	 					</select>

	 				</td>
	 			</tr>
	 			<tr>
	 				<td style="font-weight: bold;">Gender</td>
	 				<td>
	 					<select class="form-control" name="u_dept">
	 						<option><?php echo $user_gender; ?></option>
	 						 <option  name="1" >Male</option>
            <option name ="2">Female</option>
            <option name="2">Other</option>
            </select>
	 				</td>
	 			</tr>
	 			<tr>
	 				<td style="font-weight: bold;"> Forgotten Password</td>
	 				<td>
	 					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Forgoteen Password</button>

	 					<div id="myModal" class="modal fade" role="dialog">
	 						<div class="modal-dialog">
	 							<div class="modal-content">
	 								<div class="modal-header">
	 									<button type="button" class="close" data-dismiss="modal">&times;</button>
	 								</div>
	 								<div class="modal-body">
	 									<form action="recovery.php?id=<?php echo $user_id; ?>"
	 										method="post"  id="f" >
	 											
	 											<strong>what is your Favourite person or thing or place?</strong>
	 											<textarea class="form-control" cols="83" rows="4" name="content" placeholder="Someone"></textarea><br>
	 											<input class="btn btn-default" type="submit" name="sub" value="Submit" style="width: 100px;"><br><br>
	 											<pre>Answer the above question we will ask yo this question if you forget your <br>Password.</pre>
	 											<br><br>
	 										</form>
	 										<?php 
                                            if (isset($_POST['sub'])) {
                                            	$bfn = htmlentities($_POST['content']);
                                            	if ($bfn =='') {
                                            		echo "<script>alert('Pleasse Enter Something')</script>";
                                            	echo "<script>window.open('account_settings.php','_self')</script>";
                                            	exit();
                                            }
                                            else{
                                            	$update = "update users set forgetten_answer='$bfn' where user_email ='$user'";
                                            	$run = mysqli_query($con,$update);
                                            	if($run){
                                            		echo "<script>alert('Working...')</script>";
                                            	echo "<script>window.open('account_settings.php','_self')</script>";
                                            			
                                            	}
                                            	else{
                                            	echo "<script>alert('$bfn Erroe While Updating information')</script>";
                                            	echo "<script>window.open('account_settings.php','_self')</script>";
                                            			
                                            	}

                                            }
                                            }
	 										?>
	 								</div>
	 								<div class="modal-footer">
	 									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	 								</div>
	 							</div>
	 						</div>
	 					</div>
	 				</td>
	 			</tr>
	 			<tr><td></td><td><a class="btn btn-default" style="text-decoration:none;font-size: 15px; " href="change_password.php"><i class="fa fa-key fa-fw" aria-hidden="true"></i>Change Password</a></td></tr>
	 		<tr align="center">
	 			<td colspan="6">
	 				<input type="submit" value="update" name="update" class="btn btn-info">
	 			</td>
	 		</tr>
	 		</table>

	 	</form>
          <?php 
            if (isset($_POST['updaate'])) {
            	$user_name = htmlentities($_POST['u_name']);
            	$email = htmlentities($_POST['u_email']);
            	$u_gender = htmlentities($_POST['u_dept']);
            	$u_gender = htmlentities($_POST['u_gender']);
            	
            	$update="update users set user_name='$user_name',user_email='$email',user_dept='u_dept',user_gender='u_gender' where user_email='$user'";

            	$run = mysqli_query($con,$update);

            	if($run){
            		echo "<script>window_open('profile.php','_self')</script>";
            	}
            }
           ?>
	 </div>
	 <div class="col-sm-2"></div>
</div>
<div style="margin-left:30%;">
	
	<a class="down" href="video_user.php"><button  name="video" style="width: 200px;
	height:200px;font-size:30px;background:lightgreen; " type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><i class='fas fa-arrow-left' style='font-size:36px;color:black'></i>Video</button></a>
<?php
	echo " <a class='down' href='discussion.php?userId=".$row_user['user_id']."'>";  ?>
	<button  style="width: 200px;
	height:200px;font-size:30px;background:lightblue;" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Discussion<i class='far fa-comment-alt'></i></button></a>
	<a  class="down" href="material_user.php"><button  style="width: 200px;
	height:200px;font-size:30px;background:lightgreen;" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Materials<i class='fas fa-arrow-right' style='font-size:36px'></i></button></a>
	
</div>
</body>
</html>
<?php } ?>