<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        echo $_SERVER['PHP_SELF'] . "<br>";
        echo $_SERVER['SERVER_NAME'] . "<br>";
        echo $_SERVER['SERVER_PORT'] . "<br>";
        echo $_SERVER['HTTP_HOST'] . "<br>";
        echo $_SERVER['REQUEST_METHOD'] . "<br>";
        echo $_SERVER['SERVER_SOFTWARE'] . "<br>";
        echo $_SERVER['SERVER_PROTOCOL'] . "<br>";
        echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
        echo $_SERVER['SCRIPT_NAME'] . "<br>";

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $name = $_REQUEST["fname"];
            echo "Name is $name";
        }

    ?>
</body>
</html>