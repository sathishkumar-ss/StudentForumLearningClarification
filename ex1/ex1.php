<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>STUDENT REGISTRATION</title>
</head>
<body>
<?php
if(isset($_POST["name"]) && $_POST["name"]!="")
{
	$name = $_POST["name"];
	$roll = $_POST["rollno"];
	$course = $_POST["course"];
	$colg = $_POST["colg"];
?>
<h3>STUDENT REGISTRATION</h3>
<table border="5px solid">
<tr>
<td>NAME:</td>
<td><?php echo $name; ?></td>
</tr>
<tr>
<td>ROLL NO:</td>
<td><?php echo $roll; ?></td>
</tr>
<tr>
<td>COURSE:</td>
<td><?php echo $course; ?></td>
</tr>
<tr>
<td>COLLEGE:</td>
<td><?php echo $colg; ?></td>
</tr>
</table>
<?php
}
?>
</body>
</html>
