<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
      
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM user WHERE CONCAT(id, name, email, place) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
else 
{
    $query = "SELECT * FROM user";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "test");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
        
        <form action="searchdata.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table border="1px">
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                </tr>

                <?php while($row = mysqli_fetch_array($search_result)){?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                </tr>
                <?php }?>
            </table>
        </form>
        
</body>
</html>