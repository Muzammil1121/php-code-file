<?php 

/*
echo $_GET['rn'];
echo $_GET['sn'];
echo $_GET['cl'];
*/

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>


<body>
<form action="" method="post" enctype="multipart/form-data">
Roll NO <input type="text" name="rollno"  value="<?php echo $_GET['rn']; ?>"/><br><br>
Name <input type="text" name="studentname" value="<?php echo $_GET['sn']; ?>"/><br><br>
Class<input type="text" name="class" value="<?php echo $_GET['cl']; ?>"/><br><br>

Upload Image<input type="file" name="uploadfile" value=""/ ><br><br>
	<input type="submit" name="submit" value="Update"/><br><br>
	
	<img  width="200px" height="200px" src="<?php echo $_GET['pc'];  ?>">







</form>

<?php
//echo "<img src='$folder' height='100' width='100'/>";
/*
echo $_GET['rn'];
echo $_GET['sn'];
echo $_GET['cl'];
*/
include("connection.php");
error_reporting(0);
?>
<?php
if(isset($_POST['submit'])){

	$rollno =  $_POST['rollno'];
    $studentname =  $_POST['studentname'];
    $class =  $_POST['class'];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "pic/".$filename;

move_uploaded_file($tempname,$folder);
	 $query = "update student set Name='$studentname', Class='$class',picsource='$folder' where Roll_No='$rollno' ";
	 $data = mysqli_query($conn,$query);
	if($data){
		
		echo "data update ho gya";
		}
		else{
			echo "click on update button  to save";
			}
}


 ?>
 </table>
</body>
</html>