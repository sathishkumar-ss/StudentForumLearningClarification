<!DOCTYPE html>
<head>
<title>Register</title>
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
    top: 110%;
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

.signin-form  input[type="checkbox"]{

    margin-top: 2px;
    
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
.box .form-control {
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
sa
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
        <h1>Register Here</h1>
</div>
        <form name="myform2" action="signup_user.php" method="POST">

            <label>Username</label>
            <input type="text" class="form-control" name="user_name" placeholder="Enter Username" required="">

            <br>
            <label>Email</label>
            <input type="Email" class="form-control" name="user_email" placeholder="Enter email id" required="">
            
            <br>
            <label>Gender</label>
                        <select  name="user_gender" class="form-control" placeholder="Select your Gender">
            
            <option  name="1" >Male</option>
            <option name ="2">Female</option>
            <option name="2">Other</option>
            </select>
             
              
              <br>

              <label>Department</label>
            
            <select  name="user_dept" class="form-control" placeholder="Select your Department"  required>
            <option disabled="">Select your Department</option>
                
            <option value="Mechanical Engineering">Mechanical Engineering</option>
            <option value="Electronic and Electrical Engineering">Electronic and Electrical Engineering</option>
            <option value="Civil Engineering">Civil Engineering</option>
            <option value="Computer Engineering">Computer Engineering</option>
            <option value="Plastic Engineering">Plastic Engineering</option>
            <option value="Polimer Engineering">Polimer Engineering</option>
            </select>
             
             <br>
            <label>Register Number</label>
            <input type="type" class="form-control" name="user_regno" placeholder="Enter Register Number" required>
            
             
            <br>
            <label>Password</label>
            <input type="password" class="form-control" name="user_upswd1" placeholder="Enter Password" required="">
            <br>
            <label>Retype Password</label>
            <input type="password" class="form-control" name="user_upswd2" placeholder="Re-Enter Password" required="">
            <br>
            <div class="form-group"> 
             <input type="checkbox"  class="form-control" required >I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Private Policy</a>
             
             </div>
               <div class="form-group"> 
            <input style="background:green;color: red; " type="submit" name="sign_up" value="Register">
            
        
            <a href="signin.php" style="text-align:center;">existing user? clich here</a>
            </div>
        </form>
        
    </div>

<div class="foot" style="position: absolute;top:226%;width: 100%;
height: 6%; text-align: center;background-color: black;
color: white;padding: 10px">Copyrights 2021 - All Rights Reserved TNGPTC
    
</div>  

    <?php
   include 'signup_user.php';
 ?>

</body>
</head>
</html>