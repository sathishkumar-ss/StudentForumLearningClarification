<!DOCTYPE html>
<head>
<title>Register Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<style type="text/css">
    .box{

 
    background: #f5f5f5;
    color: red;
    top: 70%;
    left: 60%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;

</style>
<body>
    <?php
     include 'includes/headers.php';
    ?>

    <div class="box">
    <img src="user.png" class="user">

        <h1>Register Here</h1>

        <form name="myform2" action="dbconnection.php" method="POST">

            <p>Username</p>
            <input type="text" name="uname1" placeholder="Enter Username" required="">

            <p>Email</p>
            <input type="Email" name="email" placeholder="Enter email id" required="">

            <p>Password</p>
            <input type="password" name="upswd1" placeholder="Enter Password" required="">

            <p>Retype Password</p>
            <input type="password" name="upswd2" placeholder="Re-Enter Password" required="">

            <input type="submit" name="" value="Register">

            <br><br>
            <a href="index.php">existing user, login here?</a>
        </form>
        
    </div>

</body>
</head>
</html>