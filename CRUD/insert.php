<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	
<?php
require("connection.php");

if(isset($_POST['submit']))
{

    $name = trim($_POST['name']);
	$email = trim($_POST['email']);
    $number = trim($_POST['number']);
	$gender = $_POST['gender'];
	$city = $_POST['city'];
	$quali = implode(',',$_POST['quali']);
	
	$query = "insert into fetchdata(name,email,Number,gender,sel,qualification)
	values('$name','$email','$number','$gender','Karachi','$quali')";
	
	$result = mysqli_query($con,$query); 
	
	if($result)
	{
		echo "Data Insert Successfully";
	}
	else
	{
	   echo "Not Insert Successfully";	
	}
	
}
?>

<div class="container">
<h1>Insert Data</h1>

<form method="post">
<input type="text"  placeholder="Enter a Name" name="name" required/><br><br>
<input type="email" placeholder="Enter a Email" name="email" required/><br><br>
<input type="text" placeholder="Enter a Number" name="number" required/><br><br>

<input type="radio" name="gender" value="Male"/>Male
<input type="radio" name="gender" value="Female"/>Female<br><br>

<select name="city">
<option value="Karachi">Karachi</option>
<option value="Peshawar">Peshawar</option>
<option value="Islamabad">Islamabad</option>
</select><br><br>

<input type="checkbox" name="quali[]" value="Matric"/>Matric
<input type="checkbox" name="quali[]" value="Intermediate"/>Intermediate
<input type="checkbox" name="quali[]" value="Graduation"/>Graduation<br><br>

<input type="submit" value="Insert Data" name="submit" class="btn btn-dark"/>

</form>


</div>
</body>
</html>