<?php

$con = mysqli_connect("localhost","root","","student_id");

?>
<html>
   <head>
   
   </head>
     <body>
	  <div align="center">
       <table>
	    <form method="post" action="" enctype="multipart/form-data">
	    <h1>Registration Form</h1>
		<tr><td>Profile Pic:</td><td><input type="File" name="pic"></td></tr>
		<tr><td>Name:</td><td><input type="text" name="name"></td></tr>
		<tr><td>Father Name:</td><td><input type="text" name="f_name"></td></tr>
		<tr><td>Mother Name:</td><td><input type="text" name="m_name"></td></tr>
		<tr><td>Date Of Birth.:</td><td><input type="date" name="dob"></td></tr>
		<tr>
		<td>Class</td>
		<td>
		<select name="class">
		<option value="I">I</option>
		<option value="II">II</option>
		<option value="III">III</option>
		<option value="IV">IV</option>
		<option value="V">V</option>
		<option value="VI">VI</option>
		<option value="VII">VII</option>
		<option value="VIII">VIII</option>
		</select>
		</td>
		</tr>
		<tr><td>Contact No.:</td><td><input type="text" name="mob"></td></tr>
		<tr><td colspan="2"align="center"><input type="submit" name="submit" value="Submit"><a href='result.php' style='float:right;'>View Id</a></td></tr>
	   </form>
	 </table>
    </div>

    </body>
</html>
<?php
  if(isset($_POST['submit'])){
	  //text data variables
	  $name=$_POST['name'];
	  $f_name=$_POST['f_name'];
	  $m_name=$_POST['m_name'];
	  $dob=$_POST['dob'];
	  $class=$_POST['class'];
	  $mob=$_POST['mob'];

	 
	  //image names
	   $st_pic=$_FILES['pic']['name'];
	  
	  //image temp names
	  
	   $temp_name=$_FILES['pic']['tmp_name'];
	   
	  $f_extension1 = explode('.',$st_pic);
	  
	  $f_extension1 = strtolower(end($f_extension1));
	   
	   $f_newfile1 = uniqid().'.'.$f_extension1;
	  
	   if($f_newfile1==''OR $name=='' OR $f_name=='' OR $m_name=='' OR $mob=='' OR $dob=='' OR $class==''){
		  
		  echo"<script>alert('please fill all the fields !')</script>";
		  exit();
		   }
	  
	  else{
	   // uploading images to ist folder
	   
	   move_uploaded_file($temp_name,"student_images/$f_newfile1");

	  $insert_clint="insert into students (profile,name,f_name,m_name,dob,class,mobile,u_id)values('$f_newfile1','$name','$f_name','$m_name','$dob','$class','$mob','$u_id')";
	  
	  $run_costumer = mysqli_query($con, $insert_clint);
	  if($run_costumer){
		                echo"<script>alert('costumer inserted successfully')</script>";
	                    }
	  else{
		   echo"<script>alert('somethig went rong !')</script>";
	     }
    }
  }
?>
 