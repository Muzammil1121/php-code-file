<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php
require("connection.php");
if(isset($_POST["id"]))
{

	$id = $_POST["id"];
	
	$name =  $_POST["name"];
	$email = $_POST["email"];
	$number = $_POST["number"];
	$gender = $_POST["gender"];
	$city = $_POST["city"];	
	$quali = $_POST['quali'];
	$q = implode(',',$quali);
	 
	$query = "update fetchdata set name='$name',email='$email',Number='$number',gender='$gender',sel='$city',qualification='$q' where id=$id";

	$result = mysqli_query($con,$query);
	
	if($result)
	{
		header("location:show.php");
	}
	else
	{
		echo "Not Updated";
	}
}
else
{
	if(isset($_GET["id"]))
	{
		$id = trim($_GET["id"]);
		
		$query = "Select * from fetchdata where id=$id";
		
		$res = mysqli_query($con,$query);
		
		while($data= mysqli_fetch_array($res))
		{
			$id =  $data[0];
			$name =  $data[1];
			$email = $data[2];
			$number = $data[3];
			$gender = $data[4];
			$city = $data[5];
			$quali = $data[6];
			
			//for checkbox value retrive from database//
			$ch = explode(",",$quali);
			
		}
		
	}
}

?>
<div class="container">
<h1>Update Data</h1>

<form method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<input type="text" placeholder="Enter a Name" name="name" value="<?php echo $name; ?>" required/><br><br>
<input type="email" placeholder="Enter a Email" name="email" value="<?php echo $email; ?>" required/><br><br>
<input type="text" placeholder="Enter a Number" name="number" value="<?php echo $number; ?>" required/><br><br>

<input type="radio" name="gender" value="Male" <?php echo $gender=="Male"?"checked":""; ?>/>Male
<input type="radio" name="gender" value="Female" <?php echo $gender=="Female"?"checked":""; ?>/>Female<br><br>

<select name="city">
<option value="Karachi" <?php echo $city=="Karachi"?"selected":""; ?>>Karachi</option>
<option value="Peshawar" <?php echo $city=="Peshawar"?"selected":""; ?>>Peshawar</option>
<option value="Islamabad" <?php echo $city=="Islamabad"?"selected":""; ?>>Islamabad</option>
</select><br><br>

<input type="checkbox" name="quali[]" value="Matric" <?php if(in_array("Matric",$ch)){ echo "checked";}?>/>Matric
<input type="checkbox" name="quali[]" value="Intermediate" <?php if(in_array("Intermediate",$ch)){ echo "checked";}?>/>Intermediate
<input type="checkbox" name="quali[]" value="Graduation" <?php if(in_array("Graduation",$ch)){ echo "checked";}?>/>Graduation
<br><br>

<input type="submit" value="Update Data" class="btn btn-primary"/>
<a href="insert and show.php">back</a>
</form>
</div>
</body>
</html>