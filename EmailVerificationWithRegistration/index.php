<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
if(isset($_POST["submit"]))
{
	$con = mysqli_connect("localhost","root","","test");
	
	$u = $_POST["u"];
	$p = $_POST["p"];
	$e = $_POST["e"];
	$vkey = md5(time().$u);
	
	$p = md5($p);
	
	$query = "insert into accounts(username,password,email,vkey) values('$u','$p','$e','$vkey')";
	$result = mysqli_query($con,$query);
	
	if($result)
	{
		$to = $e;
		$subject = "Email Verification";
		$message = "<a href='http://localhost:2124/Email/verified.php?vkey=$vkey'>Register Account</a>";
		$headers = "From : waqasniaz533@gmail.com \r\n";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		mail($to,$subject,$message,$headers);
		header("location:verified.php");

	}
}
?>
<form method="post">
<input type="text" name="u" placeholder="Username"/><br><br>
<input type="password" name="p" placeholder="Password"/><br><br>
<input type="email" name="e" placeholder="Email"/><br><br>
<input type="submit" name="submit" value="Register"/>
</form>
</body>
</html>