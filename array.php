<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr1 = array("ford","toyota","bmw");
        $arr2 = ["ford","toyota","bmw"];

        echo print_r($arr1) . "<br>";
        echo print_r($arr2) . "<br>";

        $arr3 = array("brand"=>"ford","model"=>"mustang","year"=>"1964");
        echo print_r($arr3) . "<br>";

        // foreach ($arr1 as &$x) {
        //     $x = "suzuki";
        // }
        // unset($x);
        // $x = "new";
        // echo print_r($arr1) . "<br>";
        
        rsort($arr1);
        echo print_r($arr1) . "<br>";

        ksort($arr3);
        echo print_r($arr3) . "<br>";
    
        krsort($arr3);
        echo print_r($arr3) . "<br>";

        arsort($arr3);
        echo print_r($arr3) . "<br>";


        // multi-dimensional array
        $arr4 = array(
            array("volvo",22,18),
            array("BMW",25,24),
            array("Ford",15,12),
        );
        
        echo $arr4[0][0].": in stock: " . $arr4[0][1] ." sold out: ". $arr4[0][2] . "<br>";
        echo $arr4[1][0].": in stock: " . $arr4[1][1] ." sold out: ". $arr4[1][2] . "<br>";
        echo $arr4[2][0].": in stock: " . $arr4[2][1] ." sold out: ". $arr4[2][2] . "<br>";

        // array functions

        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
        print_r(array_change_key_case($age, CASE_UPPER));
        echo "<br>";

        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
        print_r(array_chunk($age,2,true));
        echo "<br>";

        $fname = array("dhruv","hrishikesh","krish");
        $age = array(21,22,23);
        $fa = array_combine($fname, $age);
        print_r($fa);
        echo"<br>";

        $a = array("A","Cat","Dog","A","Dog");
        print_r (array_count_values($a));
        echo"<br>";

        $a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2 = array("e"=>"red","f"=>"black","g"=>"purple");
        $a3 = array("a"=>"red","b"=>"black","h"=>"yellow");

        $result = array_diff($a1, $a2, $a3);
        print_r($result);
        echo"<br>";

        $keys = array("a","b","c","d","e","f");
        $a1 = array_fill_keys($keys,"dhruv");
        print_r($a1);
        echo"<br>"; 

        

        ?>
</body>
</html>