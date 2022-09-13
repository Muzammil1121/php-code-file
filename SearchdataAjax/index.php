<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Ajax search work</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 </head>
 <body>
     <input type="text" id="search" name="query" placeholder="Search by Any Details"/><br><br>
     <div id="result"></div>
</body>
</html>


<script>
$(document).ready(function(){
	 
	 load_data();
	 
	 function load_data(query)
	 {
		  $.ajax({
		   url:"fetch.php",
		   method:"POST",
		   data:{query:query},
		   success:function(data)
		   {
			$('#result').html(data);
		   }
		  });
	 }
	 
	 $('#search').keyup(function(){
		  var search = $(this).val();
		  if(search != '')
		  {
		   load_data(search);
		  }
		  else
		  {
		   load_data();
		  }
	 });
});
</script>