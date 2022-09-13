<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
abstract class A
{
	 public abstract function company();
}

class b extends A
{
	 public function company()
	 {
		 return "Abstract Data";
     }
} 

$obj = new b();
echo $obj->company();

echo "<br>";

class enc
{
    private $firstname;
	private $lastname;
	
	function __construct($fname,$lname)
	{
		$this->firstname=$fname;
		$this->lastname=$lname;
	}
	
	function see()
	{
	   echo "Hello ".$this->firstname.$this->lastname;	
	}
		
}

$objb = new enc("Vvaqas","Khan");
$objb->see();

?>
</body>
</html>