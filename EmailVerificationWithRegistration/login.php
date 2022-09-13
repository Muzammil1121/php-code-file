<?php
if(isset($_POST["submit"]))
{
	$con = mysqli_connect("localhost","root","","test");
	
	$u = $_POST["u"];
	$p = $_POST["p"];
	$p = md5($p);
	
	$query = "select * from accounts where username='$u' and password='$p'";
	$result = mysqli_query($con,$query);
	
	if(mysqli_num_rows($result) !=0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$verified = $row["verified"];
		}
		if($verified==1)
		{
			echo "The account has been verified";
		}
		else
		{
			echo "The account has not been verified";
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
<form method="post">
<input type="text" name="u"/><br><br>
<input type="password" name="p"/><br><br>
<input type="submit" name="submit" value="login"/>
</form>
</body>
</html>