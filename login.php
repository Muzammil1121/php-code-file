<?php
session_start(); 
?>

<form method="post" > 

<label> Name: </label> 
<input type="text" name="name" placeholder="Enter name"/> 

<br/> 
<br/> 

<label> Password: </label>
<input type="password" name="pass" placeholder="Enter Password" /> 

<br/> 
<br/> 

<input type="submit" name="submit" value="login" /> 

</form>

<br/> 
<br/> 

<?php

if(isset($_POST['submit']))
{
	$name = $_POST['name']; 
	$pass = $_POST['pass']; 
	
	if (($name == "Atif") && ($pass == "12345"))
	{
		$_SESSION['name'] = $name; 
		header("location: welcome.php"); 
	}
	
	else 
	echo "User name or password is inncorrect" ;  
	
	
}


 
?> 
