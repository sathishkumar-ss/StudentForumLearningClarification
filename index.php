<!DOCTYPE html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    

<body>
<?php
   include 'headers.php';
 ?>
  <h1 style="text-align: center;font-size: 20px;">WELCOME TO HOME PAGE</h1>
 <div class="php">
<table style="text-align: left;margin-left: 20%;">
 <tr><h2 style="text-align: center;">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;TNGPTC COMMUNITY FOR STUDENTS</h2></tr>
 <tr>
 <td><p  style="line-height: 30px;font-size:16px; padding: 0px 10px;">The tngptc networking website is an online
        tngptc community designed to help student in their studys. The tngptc network can help you maintain existing relationships with professors,college students  and clarify doubts, and establish relationship  by reaching out to people you've never met before, and also using this site user can share Knowledge's,develop new skills and learn new things.  </p>
</td>
</tr>
</table>
</div>


    <div class="box">

    <img src="user.png" class="user">

        <h1>Login Here</h1>

        <form name="myform"  action="signin_user.php" method="POST" >

            <p>Username</p>
            <input type="text" name="user_email" autocomplete="off" placeholder="Enter Username " required="">

            <p>Password</p>
            <input type="password" name="user_upswd1" autocomplete="off" placeholder="Enter Password" required="">


            <input type="submit" name="sign_in" value="Login">

            <br><br>
            <a href="register.php">Register for new account ?Click Here</a>

        </form>
        
    </div>
<div class="foot" style="position: absolute;top:100%;width: 100%;
height: 6%; text-align: center;background-color: black;
color: white;padding: 10px">Copyrights 2021 - All Rights Reserved TNGPTC
    
</div>  

    

</body>
</html>