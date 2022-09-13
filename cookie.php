<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cookie</title>
</head>

<body>
<?php
setcookie("myCookie","Hello World",time()+5);

if(!isset($_COOKIE["myCookie"]))
{
    echo "Cookie is not Set";
}
else
{
echo $_COOKIE["myCookie"];
}
?>
 
</body>
</html>