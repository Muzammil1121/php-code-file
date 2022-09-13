<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Image Insert</title>
</head>

<body>
<?php
//id auto increment.
$con = mysqli_connect("localhost","root","","emp");

if(isset($_POST["upload"]))
{
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
				
		$query = "insert into image(Images) values('$target')";
				
		mysqli_query($con,$query);
		
		if(move_uploaded_file($_FILES["image"]["tmp_name"],$target))
		{
					echo "Inserted";
		}
		else
		{
					echo "Not Inserted";
		}
	}
	else
	{
		echo "!Must Choose Image";
	}
}
?>

<?php
$query = "Select * from image";
$res= mysqli_query($con,$query);

while($data = mysqli_fetch_assoc($res))
{
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>".$data["id"]."</td>";
	echo "<td>".'<img src="'.$data["Images"].'" height="50" width="50"/>'."</td>";
	echo "<td>".'<a href="insert.php?id='.$data["id"].'">Delete</a>'."</td>";
	echo "<td>".'<a href="update.php?id='.$data["id"].'">Edit</a>'."</td>";
	echo "</tr>";
	echo "</table>";
}
?>

<?php
//Delete the Image by ID
if(isset($_GET["id"]))
{
	$id = $_GET["id"];
	$query = "delete from image where id=$id";
	$res = mysqli_query($con,$query);
	
	if($res)
	{
		header("location:insert.php");
	}
}
?>
<form method="post" enctype="multipart/form-data"><br><br>
<input type="file" name="image"/><br><br>
<input type="submit" name="upload" value="Insert Image"/>
<input type="hidden" value="<?php error_reporting(0); echo $_GET["id"]; ?>"/>
</form>
</body>
</html>