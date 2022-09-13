<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php   
//put in 000webhost then email is work.
  
$to = 'waqas@aptechorangi.com';
$from = 'waqas533@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';

$send =mail($to,$subject,$message,$from);

if($send)
{
	echo "Mail Send";
}
else
{
	echo "Mail Not Send";
}
?>
</body>
</html>