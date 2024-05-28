<!DOCTYPE html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
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
html{
	box-sizing: border-box;
	font-size: 62.5%; 
}
.heading{
	 margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
    background-color: white;
    color: black;

}
.card{
	display: inline-block;
	width: 20%;
	background-color: white;
	border-radius: 5px;
	margin: 80px;
	box-shadow: 2px 2px 10px black;
cursor:pointer;
}
.card:hover{
	transform: translateY(-0.5%);
	box-shadow:0 4rem 8rem rgba(0,0,0,0.5);
}

.image img{
	width: 100%;
	border-top-right-radius: 5px;
border-top-left-radius: 5px;

}
.Title{
	text-align: center;
     padding: 5px;
     
}
.des{
	text-align: center;
	padding: 4px;
}
.card-btn{
width: 100%;

padding: 1.5rem;
font-size: 2rem;
text-align: center;
color: #3363ff;
background-color:#d8e0fd;
border: none;
border-radius: 0.4rem;
transition: 0.2s;
cursor:pointer;
letter-spacing: 0.1rem;
}
.card-btn span{
	margin-left: 1rem;
	transition: 0.2s;
}
.card-btn:hover,.card-btn:active{
	background-color: black;
}
.card-btn:hover span,.card-btn:active span{
	margin-left: 1.5rem;
}

</style>    

<body >
<?php
   include 'headers.php';
 ?>
  
	<div class="heading">
		<h1 style="text-align: center;font-size: 60px">SELECT YOUR DEPARTMENT</h1>

	</div>
	<div class="main"></div>
		  <div class="card">
		  	<a href="./material/mec1.php">
		<div class="image">
		  
		  	<img   src="./department/2.png"  alt="MEC"/>
		  </div>
		  <div class="Title">
		  <h1 class="card-header">MECHANICAL ENGINEERING</h1>
		</div>
		<div class="des">
			
		   <button class="card-btn">Visit<span>&rarr;</span></button>
</a>
</div>
</div>
      <div class="card">
		<a href="./material/EEE1.php">
		<div class="image">
		  
		  	<img   src="./department/1.png" alt="MEC"/>
		  </div>
		  <div class="Title">
		  <h1 class="card-header">ELECTRICAL <br>ENGINEERING</h1>
		
		</div>
		<div class="des">
			
		   <button class="card-btn">Visit<span>&rarr;</span></button>

</div>
</a>
</div>			  
<div class="card">
	<a href="./material/civil1.php">
		<div class="image">
		  
		  	<img   src="./department/3.png"  alt="MEC"/>
		  </div>
		  <div class="Title">
		  <h1 class="card-header">CIVIL <br>ENGINEERING</h1>
		</div>
		<div class="des">
			
		   <button class="card-btn">Visit<span>&rarr;</span></button>

</div>
</a>
</div>


<div class="card">
	<a href="./material/comp1.php">
		<div class="image">
		  
		  	<img   src="./department/4.png" alt="MEC"/>
		  </div>
		  <div class="Title">
		  <h1 class="card-header">COMPUTER <br>ENGINEERING</h1>
		
		</div>
		<div class="des">
			
		   <button class="card-btn">Visit<span>&rarr;</span></button>

</div>
</a>
</div>
</div>
</article>
</body>
</html>