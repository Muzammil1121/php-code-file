<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
class Books{
  public function name(){
  echo "English book ";
  }
  public function price(){
  echo "900 Rs/-";
  }
}

$obj = new Books();
$obj->name();
$obj->price();
?>


</body>
</html>