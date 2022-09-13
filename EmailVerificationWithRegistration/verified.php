<?php
if(isset($_GET["vkey"]))
{
	$con = mysqli_connect("localhost","root","","test");
	$vkey = $_GET["vkey"];
	
	$query = "select verified,vkey from accounts where verified = 0 and vkey='$vkey'";
	$result = mysqli_query($con,$query);
	
	if(mysqli_num_rows($result) > 0)
	{
		$query = "update accounts set verified=1 where vkey = '$vkey'";
		$result = mysqli_query($con,$query);
		if($result)
		{
			echo "Account is Verified";
		}
		else
		{
			echo "Account is not Verified";	
		}
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>