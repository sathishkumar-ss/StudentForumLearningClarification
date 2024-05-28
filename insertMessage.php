<?php 
session_start();
include("connection.php");

$fromUser = $_POST["fromUser"];
$toUser = $_POST["toUser"];
$message = $_POST["message"];

$output="";

$sql = "INSERT into messages (FromUser,ToUser,Message) VALUES ('$fromUser','toUser','$message')";

if($con -> query($sql))
{
	$output.="";
}
else{
	$outputm.="Error.Please Try Again.";
}
echo $output;
?>