<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="container">


<h1>User All Information</h1>
<table class="table table-striped">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Number</th>
<th>Gender</th>
<th>Selection</th>
<th>Qualification</th>
<th>Delete Status</th>
<th>Edit Status</th>
</tr>
</thead>
<?php
require("connection.php");

$query = "Select * from fetchdata";

$result = mysqli_query($con,$query);

 while($data = mysqli_fetch_assoc($result))
 {
	 echo '<tbody>';
	 echo '<tr>';
	 echo '<td>'.$data["id"].'</td>';
	 echo '<td>'.$data["name"].'</td>';
	 echo '<td>'.$data["email"].'</td>';
	 echo '<td>'.$data["Number"].'</td>';
	 echo '<td>'.$data["gender"].'</td>';
	 echo '<td>'.$data["sel"].'</td>';
	 echo '<td>'.$data["qualification"].'</td>';
	 echo '<td>'.'<a href="Delete.php?id='.$data["id"].'">Delete</a>'.'<td>';
	 echo '<td>'.'<a href="Update.php?id='.$data["id"].'">Update</a>'.'<td>';
	 echo '</tr>';
	 echo '</tbody>';
 }

?>
</table>
</div>
</body>
</html>