<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

////For  loop///////

echo "<h2>Forloop</h2>"."<br/>";
$car =array("taha","fahad","Shoaib","noman");
$arrlenght=count($car);

for($x=0;$x< $arrlenght;$x++)
{
	echo $car[$x];
	echo"<br/>";

}

////foreach////
echo "<h2>Foreach loop</h2>"."<br/>";

$age=array("taha"=>23,"fahad"=>22,"noman"=>21);
foreach($age as $x => $x_value){
echo $x."values=".$x_value;
echo"<br/>"	;
}

/////////////sorting//////
echo  "<h2>ascending sort</h2>"."<br/>";
$sor = array("e",3,"f",9,"a");
sort($sor);
$arrlenght=count($sor);

for($x=0;$x<$arrlenght;$x++)
{
	echo $sor[$x];
	echo"<br/>";
	
}
echo "<h2>  ascending order, according to the value sort</h2>"."<br/>";
$sor = array(5,3,1,9,8);
asort($sor);
$arrlenght=count($sor);

for($x=0;$x<$arrlenght;$x++)
{
	echo $sor[$x];
	echo"<br/>";
	
}

echo "<h2>descending sort</h2>"."<br/>";
$sor = array("5",3,"1",9,"8");
rsort($sor);
$arrlenght=count($sor);

for($x=0;$x<$arrlenght;$x++)
{
	echo $sor[$x];
	echo"<br/>";
	
}
?>




</body>
</html>