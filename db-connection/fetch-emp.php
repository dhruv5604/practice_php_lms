<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <table border="2">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Salary</th>
                <th>Department</th>
            </thead>
            <tbody>
                <?php
                require('connection.php');

                $query = 'select * from emp';
                $result = $conn->query($query);
                while ($row = mysqli_fetch_row($result)) {
                    // echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3] . "<br>";
                    echo "<tr>";
                    echo "<td>" . $row[0] . "</td>" ;
                    echo "<td>" . $row[1] . "</td>" ;
                    echo "<td>" . $row[2] . "</td>" ;
                    echo "<td>" . $row[3] . "</td>" ;
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

    </center>
</body>

</html>