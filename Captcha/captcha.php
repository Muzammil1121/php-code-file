<?php
session_start(); 

$captcha_array=array_merge(range('A','Z'),range('a','z'),range(0,9));

$captcha_text="";
for($i=0;$i<6;$i++)
{
$captcha_text.=$captcha_array[rand(0,61)];
}

//Text Matching
$_SESSION["vercode"] = $captcha_text; 

$image=imagecreate(200,80);

$bgcolor=imagecolorallocate($image,0,0,0);

$textcolor=imagecolorallocate($image,rand(150,255),rand(150,255),rand(150,255));



$x=25;
for($i=0;$i<6;$i++)
{

	imagettftext($image,20,rand(-20,10),$x,48,$textcolor,"KGATeenyTinyFont.ttf",$captcha_text[$i]);
	$x+=18;
	
}

imagepng($image,"captcha_image.png");
?>


<img src="captcha_image.png" alt="captcha image"/>
<input type="button" value="Refresh" onClick="location.reload()" /><br><br>


<?php echo $captcha_text; ?>

<form action="submit.php" method="post"> 
<input type="text" name="vercode"/> 
<input type="submit" name="Submit" value="Submit"/> 
</form>






