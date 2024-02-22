<?php
$dbconnection= new mysqli("localhost","root", "", "kitchen");

echo "<p>"."<b>"."Welcome ".$_GET['name']." jan!"."</b>"."</p>";
/*if ($dbconnection->connect_errno) {
 	echo "DB is not connected !";
}
else
	echo "<br>DB connection done!"; */
$name=$_GET['name'];
$email=$_GET['email'];
$username=$_GET['username'];
$password=$_GET['password'];
$result=$dbconnection->query("insert into customers values('$name','$email','$username',md5('$password'))");
if ($result) {
	echo "<p>"."you logged in successfully!"."</p>";
}
else {
	echo "Something wrong";
}
echo "<p>"."Now you can enjoy from "."<b>"."20% DISCOUNT"."</b>"."</p>";
?>

<!-- /*$result=$dbconnection->query("select * from kitchen");
$row=$result->fetch_all(mysqli_assoc);
 foreach ($row as $value) {
 	echo $value['name'];
 }  --> 
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="cookery.css">
 </head>
 <body>
 <style> 
 	p{color: black;
      margin-top: 100px;}
	b{color: red;
      font-size: 30px;}
 </style>
 </body>
 </html>