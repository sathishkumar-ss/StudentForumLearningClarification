<!DOCTYPE html>

<?php
session_start();
include("find_friends_function.php");
include("headers.php");

if(!isset($_SESSION['user_email'])){
	header("location:signin.php");
}
else { 
 ?>

<html>

<head>
	<title>Discussion</title>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
     
	    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		
	    	    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper/1.14.3/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></script>

</head>
<style type="text/css">
	body{
		overflow-x: hidden
	}
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
		font-size: 18px;

	}
	a{
		text-decoration: none;
		font-size: 22px;
		color: black;
	}
	button:hover,a:hover{
		opacity: 0.7;
	}
	form.search_form input[type=text]{
		padding: 10px;
		font-size: 17px;
		border-radius: 4px;
		border:1px solid #343a40!important;
		float: left;
		width:80%;
		color: white;
		background: #343a40!important;
	}
	form.search_form button{
		padding: 10px;
		font-size: 17px;
		border-radius: 4px;
		border:1px solid #343a40!important;
		border-left: none;
		float: left;
		width:20%;
		cursor: pointer;
		background: #343a40!important;
	}
	form.search_form button:hover{
		background: #343a40!important;
	}
	form.search_form ::after{
	content: "";
    clear: both;
    display: table;
    }
	
	.menus{
    background: black;
    overflow: auto;
    padding: 10px 10px;
    width: 100%;
}
.menus a{
    text-decoration: none;
    padding: 13px;
    float: left;
    color: white;
    font-size: 18px;
    font-weight: bold;

}
.menus-menu{
    float: left;
}

</style>
<body>

	<nav class="navbar navbar-brand-expand-sm-bg-dark navbar-dark" >
	</nav><br>
	<div class="row">
	<div class="col-sm-4">
    </div>
	<div class="col-sm-4">
    <form class="search_form" action="">
    	<input type="text" name="search_query" placeholder=" search friends " autocomplete="off" required>
    	<button class="btn" type="submit" name="search_btn">Search</button>
    </form>
    </div>
<div class = "col-sm-4"></div>
</div><br><br>
<?php search_user();  ?>
</body>
</html>
<?php } ?>