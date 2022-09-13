<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
$con = mysqli_connect("localhost","root","","emp");

if(isset($_POST["myid"]))
{
	$id = $_POST["myid"];
	$image = $_FILES["image"]["name"];
	
	if($image != '')
	{			
		$name_ext = explode('.',$_FILES["image"]["name"]);
		
		$ext = $name_ext[1];

		$random_data = array_merge(range('A','Z'),range('a','z'),range('0','9'));
		
		$random_text ="";
		
		for($a=0; $a<10; $a++)
		{
			$random_text .=  $random_data[rand(0,61)];
		}
			
		$random_text .= ".".$ext;

		$target = "uploads/".$random_text;
				
		$query = "update image set Images='$target' where id=$id";
				
		mysqli_query($con,$query);
		
		if(move_uploaded_file($_FILES["image"]["tmp_name"],$target))
		{
					echo "Updated";
					header("location:insert.php");
		}
		else
		{
					echo "Not Updated";
		}
	}
	else
	{
		echo "!Must Choose Image";
	}
}
?>

<form method="post" enctype="multipart/form-data">
<input type="text" name="myid" value="<?php error_reporting(0); echo $_GET["id"]; ?>"/><br><br>
<input type="file" name="image" value=""/><br><br>
<input type="submit" name="Eupload" value="Update Image"/><br><br>
</form>
<a href="insert.php"/>GO BACK</a>
</body>
</html>