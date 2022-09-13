<?php

include("connection.php");

$Roll_No = $_GET['rn'];
$query = "delete from student where Roll_No='$Roll_No' ";

$data = mysqli_query($conn,$query);

if($data)
{
	echo "<script> alert('record delete')</script>";
	?>
    <meta http-equiv="refresh" content="0  url=http://localhost/jpwebtutriol_PHP_Dml_OPERATION/display.php">
    <?php
	}
	else{
	echo "<script> alert('soory delete process')</script>";
		}

?>