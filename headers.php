<!DOCTYPE html>
<html>
<style type="text/css">
	.header{
    background: black;
    overflow: auto;
    padding: 10px 10px;
}
.header a{
    text-decoration: none;
    padding: 13px;
    float: left;
    color: white;
    font-size: 18px;
    font-weight: bold;

}	.header-menu ul
	{
		display:inline-flex;
		list-style: none;
		color: white; 
	   padding:0px 10px;
	   margin: -5px;
	 
	}
	.header-menu ul li
	{
		
		}
	.header-menu ul li a
	{text-decoration: none;
		}
		.active,.header-menu ul  a{
			
			border-radius: 1px;
		}
.sub_class{
	display: none;
}
	.header-menu  li:hover .sub_class 
	{
		display: block;
		position: absolute;
		background:black;
		margin-top: 3%;
		transition: 0.2px
		}
	.header-menu  li:hover .sub_class ul{
		display: block;
		margin: 5px;
	}
	.header-menu  li:hover .sub_class ul li{
	 margin-top: 10%;
	 }
.header	a:hover{
		color: red;
	}
	
</style>
<body>
<div class="header" >
	<div class="header-menu">
	<ul>
		<li><a href="index.php">Home</a></li>
	<li><a href="#">  Register/Login</a>
	<div class="sub_class">
	<ul>
		<li><a href="signup.php">Register</a></li>
		<li><a href="signin.php">Login</a></li>
		
	</ul>
	</div>
	</li>
	
	<li><a href="discussion.php">Discussion</a></li>
	<li><a href="dept2.php">Videos</a></li>
	<li><a href="tutorial.php">Tutorials</a></li>
	<li><a href="materials.php">Materials</a>
	</li>
	</ul>
     
	
</div>	
</div>
</body>
</html>