<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        id: <input type="text" name="empid" id="empid"> <br>
        <input type="submit" value="Delete">
    </form>

    <?php
        require('connection.php');
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $id = $_POST['empid'];
            $query = "delete from emp where id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i",$id);
            $stmt->execute();

            echo "Employee Deleted";
        }
    ?>
</body>
</html>