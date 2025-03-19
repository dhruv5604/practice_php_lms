<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $x = 5;
        function my(){
            global $x;
            echo "inside function ".$x . "</br>";
        }
        my();
        echo "outside function ".$x . "</br>";

        function my2(){
            static $x = 0;
            echo $x . "<br>";
            $x++;
        }

        my2();
        my2();
        my2();

        echo "<br>";

        $a = "total";
        $b = "amount";

        ${$a . ucfirst($b)} = "new";

        echo $totalAmount;
    ?>
</body>
</html>