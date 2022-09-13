<?php
$con = mysqli_connect("localhost", "root", "", "test");

if(isset($_POST["query"]))
{
	
 $search = $_POST["query"];
 $query = "SELECT * FROM user WHERE CONCAT(name,email,place) LIKE '%".$search."%'";
}
else
{
 $query = "SELECT * FROM user ORDER BY id";
}

$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0)
{
	 echo '
	   <table border="1">
		<tr>
		 <th>Id</th>
		 <th>Customer Name</th>
		 <th>Address</th>
		 <th>City</th>
		</tr>
	 ';
	 while($row = mysqli_fetch_array($result))
	 {
	  echo '
	   <tr>
		<td>'.$row["id"].'</td>
		<td>'.$row["name"].'</td>
		<td>'.$row["email"].'</td>
		<td>'.$row["place"].'</td>
	   </tr>
	  ';
	 }
}

?>