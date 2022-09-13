<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
interface A {
    public function myage();
}

class Mangoes implements A {
   public function myage() {
	echo  ' age is 80 <br>';
	}
}

$obj = new Mangoes();
$obj->myage();
?>
</body>
</html>