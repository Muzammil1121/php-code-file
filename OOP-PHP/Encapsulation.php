<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
class A
{
		private $firstname;
		private $lastname;
		
		function __construct($fname, $lname)
		{
			$this->firstname = $fname;
			$this->lastname = $lname;
		}
		
		public function see()
		{
			echo "I just like to read everything on ".$this->firstname.$this->lastname;
		}
}
	
$obj = new A("Codes", "Cracker");
echo $obj->see();
?>
</body>
</html>