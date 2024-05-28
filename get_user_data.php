<?php
   $user_email2 = $_SESSION['user_email'];
               
$con = mysqli_connect("127.0.0.1","root","","discussion");
 
   $user = "select * from users";

  $run_user = mysqli_query($con,$user);

  while ($row_user=mysqli_fetch_array($run_user))  {
                $user_id = $row_user['user_id'];
                $user_name = $row_user['user_name'];
                $user_email = $row_user['user_email'];
                
                $user_profile = $row_user['user_profile'];
                $login = $row_user['log_in'];
 
if($user_email2 == $user_email){
                    continue;
                  }
                  


 
                echo "<a href=''>
                       <li>
                       <div class='chat-left-img'>
                       <img src='$user_profile'>
                       </div>
                       
                       <div class = 'chat-left-detail'>
                       <p><a href='discussion.php?user_name=$user_name'>$user_name</a></p> ";
               echo " <a href='chat.php?toUser=".$row_user['user_id']." '><div style = 'float:right;margin-top: -10px;'>
                   <span><i style='margin-right:-40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 40px; ' class='fa fa-comments' style='font-size:36px'>chat</i></sapan</div></a>";
    
                       if($login == 'Online'){

                          echo "<div class='status'><span style='display: flex;
  align-items: center;margin-top:-40%;margin-left:-150%;color:red;'><i class='fa fa-circle' aria-hidden='true'></i>Online</span></div>";
                        }
                        else{
                          echo "<div class='status'><span style='display: flex;
  align-items: center;margin-top:-50%;margin-left:-200%;'><i class='fa fa-circle-o' aria-hidden='true'></i>Offline</span></div>";
                        }

                   "

                        </div>
                        <br>
                       
  
                        </li>
                          </a>
                        <br>
                        ";
                       }


     

  
?>