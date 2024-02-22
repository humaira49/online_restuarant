<?php
$dbconnection= new mysqli("localhost","root", "", "kitchen");
$name=$_GET['name'];
$email=$_GET['email'];
$subject=$_GET['text'];
$message=$_GET['message'];
$dbconnection->query("insert into feedback values('$name','$email','$subject','$message')");
echo "<p>"."We got your message, dear"."  ".$_GET['name']."<br>"." Thank you for giving feedback!"."</p>"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="cookery.css">
</head>
<body>
	<style>
	p{ font-size: 30px;
	   color: red;
	   margin-top: 180px;}
	</style>
</body>
</html>