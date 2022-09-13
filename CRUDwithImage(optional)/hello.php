<?php 

//include("connection.php");
$query = "insert into student values ('2','ali','bscs')";
$data = mysqli_query($conn,$query);
if($data)
{
	echo "data insert to database";
	}
?>