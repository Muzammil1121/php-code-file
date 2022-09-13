<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Forget Password throug Email</title>
</head>

<body>
<?php
//mail function in not working in localhost check on 000webhost free domain.
$con = mysqli_connect("localhost","root","","forgetpassword") or die(mysqli_error($con));

if(isset($_POST["sub"]))
{
	$email = $_POST["email"];
	
	$query = "select * from emp where email='$email'";
	$result = mysqli_query($con,$query);
	$count = mysqli_num_rows($result);
	$data = mysqli_fetch_array($result);
	
	if($count > 0)
	{
		$pass = $data["password"];
		$to = $data["email"];
		$subject = "Your Recovery Password";
		$message = "Please use this password for login ".$pass;
		$headers = "From : waqas@aptechorangi.com";
		
		if(mail($to, $subject, $message, $headers))
		{
			echo "Your Password has been sent to your email id";
		}		
		else
		{
			echo "Failed to Recover your password, try again";
		}
	}
}

?>
<h1>Forget Password</h1>
<form method="post">
<input type="email" name="email" placeholder="Enter a Email"/>
<input type="submit" value="Submit" name="sub"/>
</form>
</body>
</html>