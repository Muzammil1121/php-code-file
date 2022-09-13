<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email Handling</title>
</head>

<body>
<?php
$email_list = file("elist.txt");

$total_emails = count($email_list);

$from = 'vvaqasniaz533@gmail.com';

for ($counter=0; $counter<$total_emails; $counter++) {
   $email_list[$counter] = trim($email_list[$counter]);
   }

$to = implode(",",$email_list);

$subject = "My email test";
$message = "Hello, how are you?";

if ( mail($to,$subject,$message,$from) ) 
   {
   echo "The email has been sent!";
   } 
   else
   {
   echo "The email has failed!";
   }
?>
</body>
</html>