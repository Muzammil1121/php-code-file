<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Session</title>
</head>

<body>
<?php
session_start();

if(isset($_POST["Sub"]))
{
	$Name=$_POST["name"];

	if(empty($Name))
	{
		echo "Name is Required";
	}
	else
    { 
	   $_SESSION["user"]=$Name;
	   header("location:Session2.php");
    }
}

if (isset($_SESSION["user"])) {
  header("location:Session2.php");
}
?>
<form method="post">
<input type="text" name="name" placeholder="Enter a Name"/>
<input type="submit" value="Submit" name="Sub"/>
</form>
</body>
</html>