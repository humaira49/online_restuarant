<?php
$dbconnection= new mysqli("localhost","root", "", "kitchen");

$name=$_GET['name'];
$order_name=$_GET['text'];
$address=$_GET['address'];
$phoneNumber=$_GET['number'];
$dbconnection->query("insert into orders values('$name','$order_name','$address','$phoneNumber')");
echo "<p>"."We received your order!"."<br>"."It will be ready in 35min!"."<br>"."Thank you...".$_GET['name']."</p>";
?>
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