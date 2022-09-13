<?php

//errors variable
$nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";
$commentError ="";


//answer variable
$name="";
$email="";
$gender="";
$website="";
$comment="";


if(isset($_POST['submit'])){
   
   if (empty($_POST["name"])) {
     $nameError = "Name is required";
   } 
   else {
    $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z]*$/",$name)) 
	 {
       $nameError = "Only letters and white space allowed"; 
     }
   }
   
   
   
   if (empty($_POST["email"])) {
     $emailError = "Email is required";
   } 
   else 
   {
    $email = test_input($_POST["email"]);
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) 
	 {
       $emailError = "Invalid email format";
     }
   }
   

   if (empty($_POST["gender"])) 
   {
     $genderError = "Gender is required";
   } 
   else 
   {
     $gender = test_input($_POST["gender"]);
   }
   
   
   
    if (empty($_POST["website"])) {
     $websiteError = "Website is required";
   } 
   else {
     $website = test_input($_POST["website"]);
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
	 {
       $websiteError = "Invalid URL"; 
     }
   }
   
   
   if (empty($_POST["comment"])) 
   {
     $commentError = "Comment is required";
   } 
   else 
   {
     $comment = test_input($_POST["comment"]);
   }
   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<!--html starts here-->
<!DOCTYPE HTML> 
<html>
	<head>
	<title>Form Validation with PHP - Demo Preview</title>
	</head>
	<body>
			<form method="post" action="validation.php"> 
				Name:<br><input class="input" type="text" name="name" value="">
				<span>* <?php echo $nameError;?></span>
				<br><br>
		 
				E-mail:<br><input class="input" type="text" name="email" value="">
				<span>* <?php echo $emailError;?></span>
				<br><br>
                
				Gender:<br>
				<input class="radio" type="radio" name="gender" value="female">Female<br>
				<input class="radio" type="radio" name="gender" value="male">Male
				<span>* <?php echo $genderError;?></span><br><br>
				<br>
		   
				Website:<br><input class="input" type="text" name="website" value="">
				<span>* <?php echo $websiteError;?></span>
				<br><br>
                
                Comment:<br><textarea name="comment"></textarea>
				<span>* <?php echo $commentError;?></span>
				<br><br>
				
				<input class="submit" type="submit" name="submit" value="Submit"> 
			</form>	
            <?php
            
echo "<h2>Your Input:</h2>";
echo $name."<br>";
echo $email."<br>";
echo $gender."<br>";
echo $website."<br>";
echo $comment."<br>";

			?>
	</body>
</html>