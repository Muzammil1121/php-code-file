<?php 
 $servername = "localhost";
$username  = "root";
$password = "";
$dbname = "web";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
	}
else{
	die("connection failed".mysqli_errno());
	}
?>