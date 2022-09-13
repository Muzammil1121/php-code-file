<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
 </head>  
 <body>  
  
    <table border="1">
     <tr>  
        <th>Id</th>  
        <th>Name</th>  
        <th>Email</th>  
        <th>place</th>
    </tr>
    <?php
    $connect = mysqli_connect("localhost", "root", "", "test");
    $sql = "SELECT * FROM user";  
    $result = mysqli_query($connect, $sql);

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
     ?>

    </table>
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" value="Export" />
    </form>
 </body>  
</html>