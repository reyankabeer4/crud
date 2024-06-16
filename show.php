
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-align: center;
            
        }
        
        table{
            height: 100vh;
            width: 100%;
            border: 1px solid black;
        }
        
        th,td{
            border: 1px solid black;
            
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Department</th>
                <th>Salary</th>
                <th>Button</th>
            </tr>

        </thead>
        <tbody>

            <?php

    require "config.php";
    
    $insertQuery="SELECT * FROM `employeesTable`";
    $result=mysqli_query($connection,$insertQuery);

    $rows=mysqli_num_rows($result);
    if($rows>0){
        while($data=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$data['id']."</td>"; 
            echo "<td>".$data['name']."</td>"; 
            echo "<td>".$data['email']."</td>"; 
            echo "<td>".$data['age']."</td>"; 
            echo "<td>".$data['department']."</td>"; 
            echo "<td>".$data['salary']."</td>"; 
            echo "<td><button><a>Edit</a></button>  <button><a>Delete</a></button></td>"; 
            echo "</tr>"; 
        }
    }

    ?>
    </tbody>
    </table>
</body>
</html>