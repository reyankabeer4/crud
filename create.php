<?php


require "config.php";

// $nameErr = "";
// $emailErr = "";
// $ageErr = "";
// $departmentErr = "";
// $salaryErr = "";




if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    $insertQuery = "INSERT INTO employeesTable(name,email,age,department,salary )  VALUES  ( '$name' , '$email' ,'$age' , '$department' , '$salary')  ";

    $result = mysqli_query($connection, $insertQuery);

    if ($result == true) {
        echo "<script>alert('Data Inserted Successfully')</script>";
    } else {
        echo "<script>alert(' Inserted Failed')</script>";

    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="number" name="age" placeholder="Age"><br><br>
        <input type="text" name="department" placeholder="Department"><br><br>
        <input type="number" name="salary" placeholder="Salary"><br><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>