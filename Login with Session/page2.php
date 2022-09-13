<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();

if(isset($_SESSION["admin"]))
{
	$name = $_SESSION["admin"];
	echo "Welcome Mrs : ".$name."<br>";
}
else
{
	header("location:login.php");
}

if(isset($_POST["logout"]))
{
	session_destroy();
	header("location:login.php");
}

?>
<form method="post">
<input type="submit" name="logout" value="Logout"/>
</form>
</body>
</html>