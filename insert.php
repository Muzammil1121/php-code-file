<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
$con = mysqli_connect("localhost","root","","student");
$std_id = $_POST["id"];
$std_name = $_POST["name"];
$std_address = $_POST["address"];
$query = "insert into record values ($std_id,'$std_name','$std_address')";

$result = mysqli_query($con,$query);


?>
<center>
<form method="post">
ID<input type="text" name="id"/></br>
Name<input type="text" name="name"/></br>
Address<input type="text" name="address"/></br>
<input type="submit" value="insert"/>


</form>
</center>
</body>
</html>