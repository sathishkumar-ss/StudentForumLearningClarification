<!DOCTYPE html>
<head>
<title>Materials</title>
<link rel="stylesheet" type="text/css" href="style.css">
    </head>
<style type="text/css">
	body{
    margin: 0;
    padding: 0;
    background: url(sm.jpg)no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    font-family: sans-serif;

}
h1{
	 margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
    background-color: white;
    color: black;

}
article{

	width:auto;
	padding:10px;
	margin: 5px;
	overflow-x :auto;
}
div{
	float: center;
}

.img{
	background: #f5f5f5;
	border:2px soldi black;
	padding: 10px;
	border-radius: 10px;
	margin:5px;
	overflow-x: auto;
    display: inline-block;
box-shadow: 2px 2px 10px black;
cursor:pointer;
}
.img:hover{
    transform: translateY(-0.5%);
    box-shadow:0 4rem 8rem rgba(0,0,0,0.5);
}

    
</style>    

<body >
<?php
   include 'headers.php';
 ?>
  <h1 style="text-align: center;font-size: 60px">SELECT YOUR YEAR</h1>>
 <article>
<section style="text-align: center;">
 <div class="img">
 
<a href="firstyearsm.php"><img src="firstyear.png" width="300px" height="300px"></a>
 	<h4>NEW TO COLLEGE?CLICK ABOVE</h4>
 	</div>
 	<div class="img">
 	<a href="dept1.php"><img src="2and3.png" width="300px" height="300px"></a>
 	<h4>SECOND OR FINAL YEAR?CLICK ABOVE</h4>
</div>
</section>
</article>
