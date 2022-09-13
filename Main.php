<?php
include("bankBean.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post">
<input type="text" name="AccountNo">
<input type="text" name="name">
<input type="text" name="NIC">
<input type="text" name="Balance">
<input type="submit" name="submit"><br>
<input type="text" name="withdraw">
<input type="submit" name="show" value="withdraw">

</form>
<?php
if(isset($_POST['submit'])){
	$account=$_POST['AccountNo'];
	$name=$_POST['name'];
	$NIC=$_POST['NIC'];
	$balance=$_POST['Balance'];
	$obj=new BankBean($account,$name,$NIC,$balance);
	echo"Account is created";
	echo"<table border='2'>";
		echo"<tr>";
		echo"<td>";
		$a=$obj->showAccount();
		echo"".$a;
		echo"</td>";
		echo"<td>";
		echo"".$obj->showname();
		
		echo"</td>";
		echo"<td>";
		echo "".$obj->showNIC();
		echo"</td>";
		echo"<td>";
		echo"".$obj->showbalance();
		echo"</td>";
		echo"</tr>";
		echo"</table>";
	}
	
?>

</body>
</html>