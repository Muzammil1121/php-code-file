<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
<h1>User All Information</h1>
<table class="table">
<tr>
<th>ID</th>
<th>First Name</th>
<th>Account Number</th>
<th>Data Edit</th>
</tr>
<?php
require("connection.php");

$query = "Select * from users";

$result = mysqli_query($con,$query);

 while($data = mysqli_fetch_assoc($result))
 {
	 echo '<tr>';
	 echo '<td>'.$data["id"].'</td>';
	 echo '<td>'.$data["Firstname"].'</td>';
	 echo '<td>'.$data["accountno"].'</td>';
	 echo '<td>'.'<input type="submit" class="btn btn-primary" value="Edit"/>'.'<td>';
	 echo '</tr>';
 }

?>
</table>
</div>
</body>
</html>