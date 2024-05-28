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
  ?>

<head>
  <title>Dicussion</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="home.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    
</head>
  <script>
        $('#scrolling_to_bottom').animate({
          scrollTop: $('#scrolling_to_bottom').get(0).scrollHeight},1000);
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
          var height = $(window).height();
          $('.left-chat').css('height',(height - 92) + 'px');
          $('.right-header-contentChat').css('height', (height - 163) + 'px');
                            
});
      </script>

     
</script>
</head>
<style type="text/css">
  .chat-left-img img{
  width:100px;
  height: 100px;
  border-radius:  50px;
  text-align: left;
  float: fixed;
  border: 3px solid #686F79;
 float: left;
  
 }.left-chat{
  overflow-y: scroll;
}
.left-chat ul{
    overflow: hidden;
    padding: 0px;

}
.left-chat ul li{
  list-style: none;
  width: 100%;
  float: left;
  margin: 10px 0px 8px 15px;
border-bottom:2px solid lightgrey;
}

.chat-left-detail{
  margin-right: 100px;
   font-size: 30px;
}
.chat-left-detail p{
  margin: 0px;
  color: #fff;
  padding: 7px 0px 0px;
   
}
.menu button{
  background: black;
  border: none;
  color: white;
  font-weight:bold;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border: 2px solid grey;
  border-radius: 12px;
}
.menu-option{
   
   
  display: none;
  font-size: 25px;

}
.menu ul
  {
    display:inline-flex;
    list-style: none;
    color: white; 
     padding:0px 10px;
     margin: -4px;
   
  }
  .menu button:hover{
    box-shadow: 2px 2px 10px black;
  }
  
}
.menu-option a{

text-decoration: none;
    padding: 13px;
    float: left;
    color: white;
    font-size: 8px;
    font-weight: bold;
c
}
  .menu  button:hover .menu-option 
  {
    display: block;
    position: absolute;
    height: 60%;
    width: 20%;
    background:black;
 margin-top: 2%;     
  margin-left:-8%;
 border-radius: 12px; 
    
    }
  .menu  button:hover .menu-option ul{
    display: block;
    margin: 5px;
    border-radius: 20%;

  }
  .menu-option ul li{
    text-align: center;
    color: white;
     font-size: 18px;
 padding: 12px;  
   color:white;
   
   }
.menu a{
  color:white;
}

.menu a:hover{
  color:red;
}
.log button{
  background: red;
  border: none;
  color: white;
  font-weight:bold;
  padding-top: 5px;
  padding: 10px 42px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border: 2px solid white;
  border-radius: 12px;

}
.log button:hover{
    box-shadow: 2px 2px 10px black;
  
}
.status{
  text-align: center;
top: 12%;
} 

</style>
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
          $userId = $row_user['user_id'];
          
              
   ?>
   <div class="col-sm-8">
    
      <table  class="table table-bordered table-hover">

        <tr  align="center">
          <td colspan="14" class="active"><h2>
<div class="menu" style="float:left;margin-top: 20px;right: 50px">
              <button  name="menu">Menu
  <div  class="menu-option">
             <ul >
    <li><a  href="find_friends.php">Add Friends</a></li>
    <li><a href="profile.php"

      >Profile</a></li>
    
  </ul>
  </div>
             </button>  
                </div>
             

            <?php

                   
              echo "<img src ='$user_profile' width='100px' height='100px' style='border-radius:  50px;' >";
              echo "&nbsp";
              echo "$user_name";

              ?>
             <div class="log" style="float: right;margin-top: 20px;right: 50px">
 <a href="logout.php"> <button  class="btn btn-danger"
                 name="logout">Logout</button></a>  
                </div>
              
              </h2></td>
        </tr>
</table>
</div>
</div><table style="width: 50%;height: 50%;margin-left: 24%;" class="table table-bordered table-hover">

        <tr style="" align="center">
          <td colspan="6" class="active">
             <div class="left-chat">
        <center><h3>Please Select a User to Discuss</h3></center>
        <ul>
          <li><?php include("get_user_data.php"); 
           
          ?>
           
            </li>
          <br>
          </ul>
      </div>
     
          </td>
          
        </tr>
                </table>

<!--<div  id="front" class="col-md-4" style="margin-top: -40%; margin-left: 10%;">

<div class="modal-dialog">
  <div class="modal-content">
    <div class="model-header">
    <h4>
      <?php
   /*                if (isset($_GET['toUser'])) {
                    
                      
                         $userName = mysqli_query($con,"SELECT * from users where user_id = '".$_GET['toUser']."' ") or die("Failed to open".mysqli_error());
                          
                         $uName = mysqli_fetch_array($userName);
                         $toUserId = $uName['user_id'];
                         $profile = $uName["user_profile"];
                         
                         echo '<input type="text" value='.$_GET["toUser"].'  id="toUser" hidden/>' ;
                        echo "<img src='$profile' width='100px;' height='100px' style='border-radius:  50px;'>";
                         echo  $uName["user_name"];
                          echo "<a href='?exit'><button style='font-size:24px;margin-left:25%;'> <i class='far fa-window-close'></i></button></a>
";
                      
                         }
                        elseif(isset($_GET['exit'])){
                         echo" <script> 
                         .modal-dialog{
                          display:none;
                        }
                       
                        ";
                        
                else {
                    
   
                      
                         $userName = mysqli_query($con,"SELECT * from users  ") or die("Failed to query database".mysqli_error());
                         $uName = mysqli_fetch_array($userName);
                         $profile = $uName["user_profile"];
                         $_SESSION["toUser"] = $uName["user_id"];
                         echo '<input type="text" value='.$_SESSION["toUser"].'  id="toUser" hidden/>' ;
                         $nbsp;
                         echo "<img src='$profile' width='100px;' height='100px' style='border-radius:  50px;'>";
                         echo  $uName["user_name"];
                        echo "<a href='?exit'><button style='font-size:24px; margin-top:-90%;margin-left:50%;'> <i class='far fa-window-close'></i></button></a>
";
                         } 
          ?>
</h4>
       
    </div>
    <div class="model-body" id="msgBody" style="height: 400px;overflow-y: scroll;overflow-x: hidden;">
      <?php 

                    $sendUser = $_SESSION["toUser"];
           
                   if (isset($_GET["toUser"])){ 
                    $chats = mysqli_query($con,"SELECT * FROM messages where (FromUser = '$userId' AND ToUser = '".$_GET["toUser"]."') OR (FromUser = '".$_GET["toUser"]."' AND ToUser = '$userId')") or die("Failed to query database".mysqli_error());
                          $chat = mysqli_fetch_assoc($chats); 
                           $toUserId = $chat["ToUser"];            }
                          else { 
                            $chats = mysqli_query($con,"SELECT * FROM messages where (FromUser = '$userId' AND ToUser = ' $toUserId') OR (FromUser = ' $toUserId' AND ToUser = '$userId')")or  die("Failed to query database".mysqli_error());
                          
                          
                          while ($chat = mysqli_fetch_assoc($chats))
                          {        
                            if ($chat["FromUser"] == $userId)
                               echo "<div style='text-align:right;'>
                               <p style='background-color:lightblue; word-wrap:break-word; display:inline-block;padding:5px; border-radius:10px;max width:70%;'>
                               ".$chat["Message"]." 
                           </p>
                           </div>";
                             
                            else
                              echo "<div style='text-align:left;'>
                               <p style='background-color:yellow; word-wrap:break-word; display:inline-block;padding:5px; border-radius:10px;max width:70%;'>
                               ".$chat["Message"]." 
                            
                            
                           </p>
                           </div>
                               ";
                         
                          } 
                        }
      */?>
    </div>
<div class="model-footer">
<textarea id="message" name="msg_content" class="form-control" style="height: 70px;"></textarea>

  <button id="send"  class="btn btn-primary" style="height: 70px;width:20%;  margin-left: 40%;">Send </button>
<p id="test"></p>
  <form  method="post" ">
        
  <input type="file" name="uploadFile" id="uploadFile" accept=".jpg, .png" style="display: none;" />
<label  for="uploadFile" style="cursor: pointer;  position: absolute;
  top:80%;
  right:3%;
"><i style='font-size:28px;border-radius: 20% ;' class='fas'>&#xf0c6;</i></label>

</form>
</div>
  </div>
</div></div>
<div class="col-md-4">
  </div>
-->
</body>
</html>

<?php  } ?>