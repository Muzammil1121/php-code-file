<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Polymorphism</title>
</head>

<body>
<?php
class base 
{ 
	function add($a,$b)
	{
		$res=$a*$b;
		echo "Multiplication = ".$res;
	}
}
 
class child extends base 
	{
	function add($a,$b)
	{
 		$res=$a+$b;
		echo "Sum  = ".$res;
	}
}
 
$obj= new child();
$obj->add(1000,500);
 
?>
</body>
</html>