<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $colors = array("red","pink","yellow","blue");

    foreach($colors as $x){
        echo "$x <br>";
    }

    // indexed array

    $members = array("peter"=>"35", "Ben"=>"37", "Joe"=>"21");

    foreach($members as $x=>$y){
        echo "$x : $y <br>";
    }

    // array element will not change.
    foreach($colors as $x){
        if ($x == "yellow") $x = "green";
    }
    var_dump($colors);
    echo"<br>";
    
    //for changing array element we need to use reference of original array.
    foreach($colors as &$x){
        if ($x == "yellow") $x = "green";
    }
    var_dump($colors);
    ?>



</body>
</html>