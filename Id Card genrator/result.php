<?php

$con = mysqli_connect("localhost","root","","student_id");

?>

<html>
    <head>
        <title>school id</title>
        <script language="javascript">
        function printpage()
            {
                window.print();
            }
        </script>
    </head>
   <style>
   #card{
	   float:left;
	   width:360px;
	   height:230px;
	   margin:5px;
	   border:1px solid black;
	   background-image: url("images/id.jpg");
	   background-repeat: no-repeat;
	   background-size: 360px 230px;
	   -webkit-print-color-adjust: exact;
   }
   #c_left{
	   margin-top:65px;
	   margin-left:10px;
	   float:left;
	   width:80px;
	   height:120px;

	   
   }
   #c_box{
	  width:80px; 
	  height:20px;
	  padding:5px;

   }
  #c_right{
	   
	   margin-left:120px;
	   width:220px;
	   height:200px;

   }
   td{
	   font-size:12px;
   }

   </style>
   <?php

       $i=0;
		$get_costumers="select*from students order by 1 DESC;";
		
		$run_costumers=mysqli_query($con, $get_costumers);
		
		while ($row_costumers=mysqli_fetch_array($run_costumers)){
			
			
			$st_id = $row_costumers['student_id'];
			$img = $row_costumers['profile'];
			$st_name = $row_costumers['name'];
			$f_name = $row_costumers['f_name'];
			$m_name = $row_costumers['m_name'];
			$mob = $row_costumers['mobile'];
			$dob = $row_costumers['dob'];
			$class = $row_costumers['class'];
			$st_id = $row_costumers['u_id'];
			$i++;
			
			
			
			
		
		?>
   
   
   
     <body>
	 <div id="card">
	  <div id="c_left">
	  <img src="student_images/<?php echo $img; ?>"width="80px"height="100px"style="border:1px solid black;"><br>
	  <div id="c_box">
	  Class : <?php echo $class; ?>
	  </div>
	  </div>
	  <div id="c_right">
	  <div style="margin-top:2px;margin-left:117px;color:#fff;font-size:10px;">Contact No. 9887533754 <br></div>
	   <div style="margin-left:168px;color:#fff;font-size:10px;"> 9887533754 <br></div>
	  <div style="margin-top:4px;margin-left:90px;color:#fff;">Student Id: <?php echo $st_id; ?> <br></div>
	  <table style="margin-top:23px;">
	  <tr>
	  <td><b>Name</b></td><td><b>: <?php echo $st_name; ?></b></td>
	  </tr>
	  <tr>
	  <td><b>Father's Name</b></td><td>: <?php echo $f_name; ?></td>
	  </tr>
	  <tr>
	  <td><b>Mother's Name</b></td><td>: <?php echo $m_name; ?></td>
	  </tr>
	  <tr>
	  <td><b>Date Of Birth</b></td><td>: <?php echo $dob; ?></td>
	  </tr>
	  <tr>
	  <td><b>Contact No.</b></td><td>: <?php echo $mob; ?></td>
	  </tr>
	  <tr>
	  <td><i>Pirnciple</i></td><td><img src="images/sign.jpg"width="50px"></td>
	  </tr>
	  </table>
	  
	  </div>
	   <div style="margin-top:10px;margin-left:5px;color:#000;font-size:12px;"> Khara kua ke pas, sherpur khilchipur sawai madhopur(RAJ) 322001</div>
	 </div>
	 <?php } ?>
	 	
	 </body>
   </head>
</html   