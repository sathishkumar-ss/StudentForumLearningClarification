<?php 
    include_once "config.php";
    session_start();
    if(isset($_SESSION['user_email'])){
     
    $email =$_SESSION['user_email'];    
   
    $select_user = "select * from users where user_email='$email'";

    $que = mysqli_query($conn,$select_user);
        $check_user = mysqli_fetch_array($que);
        $outgoing_id = $check_user["user_id"];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);

        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        }
    }else{
        header("location: ../login.php");
    }


    
?>