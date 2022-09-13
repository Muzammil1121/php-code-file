
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();

if (isset($_SESSION["user"])) {
    $Name=$_SESSION["user"];
    echo "Welcome Mrs ".$Name;
}
else
{
	header("location:Session.php");
}

if(isset($_POST["logout"]))
{
    session_destroy();
	header("location:Session.php");
}


?>
</body>
<form method="post">
<input type="submit" value="Logout" name="logout"/>
</form>
</html>