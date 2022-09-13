<?php
session_start() ; 

if(isset($_POST['submit']))
{
	session_unset();
	session_destroy(); 
}


if(isset($_SESSION['name']))
{
	$name = $_SESSION['name']; 
	echo "<h1> $name it is a second page </h1>"; 
}

else 
header("location: login.php"); 


?>

<form method="post" > 
<input type="submit" name="submit" value="logout" /> 
</form>