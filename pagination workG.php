<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagination</title>
</head>

<body>
<h1><marquee>Pagination</marquee> </h1>
<table border="1">
<th>Id</th>
<th>Name</th>
<th>F_Name</th>
<th>Address</th>
<?php
$con=mysqli_connect('localhost','root','','SJ');
$query="select * from students";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
$per_page=4;
$current_pages="";
$pages=ceil($rows/$per_page);


if(isset($_GET['cur_page']))
{
 $current_pages=$_GET['cur_page'];
}
else
{
 $current_pages=1;	
	}

$results=$per_page*($current_pages-1);
$queryy=mysqli_query($con,"select * from students limit ".$results.",".$per_page." ");
while($data=mysqli_fetch_array($queryy))
{
	?>
	<tr>
    <td><?php echo $data[0]?> </td>
	 <td><?php echo $data[1]?> </td>
      <td><?php echo $data[2]?> </td>
       <td><?php echo $data[3]?> </td>
	</tr>
	<?php
    }
	?>
</table>
<?php
for($page=1;$page<$pages;$page++)
{
	echo '<a href="pagination1.php?cur_page='.$page.'">'." ".$page.'</a>';
	}
if($results>1)
{
	$previous=$current_pages-1;
	echo "<br>".'<a href="pagination1.php?cur_page='.$previous.'">Previous </a>';
	}
else
{
	$Next=$current_pages+1;
	echo '<a href="pagination1.php?cur_page='.$Next.'"> Next</a>';
	}


?>



</body>
</html>