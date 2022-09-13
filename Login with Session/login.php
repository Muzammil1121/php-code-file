<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
</head>

<body>
<?php
session_start();
$con = mysqli_connect("localhost","root","","loginsession");

if(isset($_POST["login"]))
{
	$name = $_POST["name"];
	$pass = $_POST["pass"];
	
    $query = "select * from login where username='$name' and password='$pass'";
	$res = mysqli_query($con,$query);
	
	$number = mysqli_num_rows($res);
	
	if($number==1)
	{
		while($data = mysqli_fetch_array($res))
		{
			$NAME = $data[1];
			$PASS = $data[2];
			$CAT = $data[3];
			
			if($NAME==$name && $PASS==$pass && $CAT==0)
			{
				$_SESSION["admin"]=$NAME;
				header("location:page2.php");
			}
			elseif($NAME==$name && $PASS==$pass && $CAT==1)
			{
				$_SESSION["admin"]=$NAME;
				header("location:page2.php");
			}
		}
	}
	else
	{
		echo "Incorrect Username and Password";
	}
}
if(isset($_SESSION["admin"]))
{
	header("location:page2.php");
}
?>
<h1>Login Form</h1>
<form method="post">
<input type="text" name="name" placeholder="Enter a username"/><br><br>
<input type="password" name="pass" placeholder="Enter a Password"/><br><br>
<input type="submit" value="Login" name="login"/>
</form>
</body>
</html>