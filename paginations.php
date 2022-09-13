<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagination</title>
</head>

<body>

<?php

$con = mysqli_connect("localhost","root","","student") or die("Connection Failed");

$query = mysqli_query($con,"select * from pagination");

$rows = mysqli_num_rows($query);

$per_page_record=10;

$pages = ceil($rows / $per_page_record);


if(isset($_GET['page']))
{
	$page = $_GET['page'];
	}
else{
	$page =1;
	}
	
$start_limt = ($page-1) * $per_page_record;
	

$query_rec = mysqli_query($con,"select * from pagination limit ".$start_limt.",".$per_page_record);

echo '<table border="1">';


echo '<tr>';
echo '<th> ID </th>';
echo '<th> Name </th>';
echo '<th> Father Name </th>';
echo '<th> Class </th>';
echo '<th> Age </th>';
echo '</tr>';


while($rec = mysqli_fetch_array($query_rec))
{
	echo "<tr>";
		echo '<td>'.$rec[0].'</td>' ;
		echo '<td>'.$rec[1].'</td>' ;
		echo '<td>'.$rec[2].'</td>' ;
		echo '<td>'.$rec[3].'</td>' ;
		echo '<td>'.$rec[4].'</td>' ;
	echo "</tr>";
	
	}

echo '</table>';
	
	//Below Code For Next and Previous with page numbers
	
	echo "<a href='paginations.php?page=".($page-1)."'><</a>"; 
	
	for($a=1;$a<=$pages;$a++)
    {

	 echo "<a href='paginations.php?page=".$a."'>". $a ."</a>";

	}
	
	 echo "<a href='paginations.php?page=".($page+1)."'>></a>";
	
?>

</body>
</html>