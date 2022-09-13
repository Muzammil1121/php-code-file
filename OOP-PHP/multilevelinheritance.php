<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
class A {
	public function myage() {
	echo  ' age is 80 <br>';
	}
}

class B extends A {	
	public function mysonage() {
	echo  ' age is 50 <br>';
	}
}

class C extends B {
	public function mygrandsonage() {
	echo  'age is 20 <br>';
    }    
	
}
$obj = new C();
$obj->myage();
$obj->mygrandsonage();
$obj->mysonage();
?>
</body>
</html>