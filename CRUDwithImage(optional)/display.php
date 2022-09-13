<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
td{
	
	padding:10px;
	}
</style>
<body>
<?php /* include("connection.php");
error_reporting(0);

$query = "select * from student";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
if($total != 0){
	
	
	while ($result = mysqli_fetch_assoc($data))
	{
echo $result['Roll_No']." ".$result['Name']." ".$result['Class']."</br>";
		}
	
	}
	else{
		
		echo "No record found";
		}
*/

 include("connection.php");
error_reporting(0);

$query = "select * from student";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
if($total != 0){
	
	?>
    <table>
    <tr>
    <th>Roll No</th>
        <th>Image</th>
    <th>Name</th>
    <th>Class</th>
        <th colspan="2">Operations</th>
    
    </tr>
    
    <?php
	while ($result = mysqli_fetch_assoc($data))
	{
echo "<tr>
    <td>".$result['Roll_No']."</td>
	  <td><a href='$result[picsource]'><img src='".$result['picsource']."'height='100'</td>
    <td>".$result['Name']."</td>
    <td>".$result['Class']."</td>
	 <td><a href='update.php?rn=$result[Roll_No]&sn=$result[Name]&cl=$result[Class]&pc=$result[picsource]'>Edit</a></td>
	  <td><a href='delete.php?rn=$result[Roll_No]'>Delete</a></td>
    
    </tr>";
		}
	
	}
	else{
		
		echo "No record found";
		}


?>
</table>
</body>
</html>