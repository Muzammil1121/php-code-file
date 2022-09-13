<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "test");

if(isset($_POST["export"]))
{
 $query = "SELECT * FROM user";
 $result = mysqli_query($connect, $query);
 
  echo '
   <table border="1">  
        <tr>  
        <th>Id</th>  
        <th>Name</th>  
        <th>Email</th>  
        <th>Place</th>
        </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   echo '
    <tr>  
    <td>'.$row["id"].'</td>  
    <td>'.$row["name"].'</td>  
    <td>'.$row["email"].'</td>  
    <td>'.$row["place"].'</td>  
    </tr>
   ';
  }
  echo '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
}
?>