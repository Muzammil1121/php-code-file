<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data">

<input type="file" name="uploadfile" value=""/ >

<input type="submit" name="submit" value="upload file"/ >
</form>
</body>
</html>

<?php 


$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];

$folder = "pic/".$filename;

move_uploaded_file($tempname,$folder);

echo "<img src='$folder' height='100' width='100'/>";
?>