<!DOCTYPE html>
<?php
include("connection.php");

?>
<html>
<head>
	<title>Login to your account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link   href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="style.css">
 
</head>
<style type="text/css">


  
.box{

 
    background: #f5f5f5;
    color: red;
    top: 70%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 60px 30px;
    width: 40%;
}
.head{
    margin: -30px -30px 20px;
    padding: 30px 30px 10px;
    text-align: center;
    border-bottom: 1px solid #eee;
    color:black;
}
 input[type="text"], input[type="password"] ,input[type="email"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background-color: #D3D3D3 ;
    outline: none;
    height: 40px;
    color: #673ab7;
    font-size: 16px;
}

input[type="submit"]
{
    border: none;
    left: 50%;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;

}
box .form-control {
    background-color: #D3D3D3 ;
    
}

.box  .form-group{
    text-align: center;
    margin-bottom: 20px;
    padding: 10px;
}

.box  .btn{
    font-size: 16px;
    font-weight: bold;
    background: #00cb82;
    border:none;
    min-width: 200px;
}
.box  .btn:hover,.signin-form .btn:focus{
    background: #00b073 !important;
    
    outline: none;
}
a
{
    text-decoration: none;
    font-size: 16px;
    line-height: 20px;
    color: #069818;
}


a:hover
{
    color: red;
}
.user{
    width: 100px;
    height: 100px;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}




</style>
<body>
    <?php
   include 'headers.php';
 ?>

   <div class="box">

    <img src="user.png" class="user">
    <div class="head">
        <h1>Login Here</h1>
</div>
        <form name="myform"  action="signin_user.php" method="POST" >

            <label>Email:</label>
            <input type="text" class="form-control" name="user_email" placeholder="Enter Email "  autocomplete="off" required>

            <label>Password:</label>
            <input type="password" class="form-control"  name="user_upswd1" placeholder="Enter Password" autocomplete="off" required="">


            

            <br><br>
<div class="small">Forget password? <a href="forgot_pass.php">Click Here</a></div>
            <div   class="form-group">
            <input type="submit" name="sign_in" value="Login">
            </div>
        <?php
   include 'signin_user.php';
 ?>
         </form>

  
        <div class="text-center small" style="color: #674288;">Don't have an account?<a href="signup.php">Create one</a></div>

        
    </div>

    
    

</body>
</html>