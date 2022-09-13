<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
session_start(); 
if ($_POST["vercode"] != $_SESSION["vercode"] or $_SESSION["vercode"]=='')  { 
     echo  '<strong>Incorrect verification code.</strong>'; 
} 
else { 
     
	 header("location:captcha.php");
	 echo  '<script>alert("Correct");</script>'; 
};
?>
</body>
</html>