<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data">
Roll NO <input type="text" name="rollno"  value=""/><br><br>
Name <input type="text" name="studentname" value=""/><br><br>
Class<input type="text" name="class" value=""/><br><br>
Upload Image<input type="file" name="uploadfile" value=""/ ><br><br>
<input type="submit" name="submit" value="submit"/>

</form>

<?php
include("connection.php");
if(isset($_POST['submit'])){
	
	
	$rn = $_POST['rollno'];
	$sn = $_POST['studentname'];
	$cl = $_POST['class'];
	
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "pic/".$filename;

    move_uploaded_file($tempname,$folder);
	
	if($rn!="" &&$sn!="" &&$cl!="" && $filename!="")
	{
		
		$query = "insert into student values ('$rn','$sn','$cl','$folder')";
		$data = mysqli_query($conn,$query);
		if($data)
		{
			echo "data inserted into database";
		}
		
	}
	else
		{
			
			echo "All Fields are Required";
		}
	
	
	}


 ?>
</body>
</html>