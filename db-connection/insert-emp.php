<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        id: <input type="text" name="empid" id="empid"> <br>
        Name:<input type="text" name="empname" id="empname"><br>
        salary: <input type="text" name="empsalary" id="empsalary"><br>
        Department: <input type="text" name="empdept" id="empdept"><br>

        <input type="submit" value="Insert">
    </form>

    <?php
        require('connection.php');
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['empid'];
            $name = $_POST['empname'];
            $salary = $_POST['empsalary'];
            $dept = $_POST['empdept'];

            $query = 'insert into emp values(?,?,?,?)';
            $stmt = $conn->prepare($query);
            $stmt->bind_param("isds",$id, $name,$salary, $dept);
            $stmt->execute();

            echo "Employee Inserted";
        }
    ?>

</body>
</html>