<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = "Hello world!";

        echo strlen($x) . "<br>";
        echo str_word_count($x) . "<br>";
        echo str_replace("world" , "dhruv" , $x) . "<br>";
        echo strpos($x , "world") . "<br>";
        echo strrev($x) . "<br>";
        $y = explode(" ", $x);
        print_r($y); 
        echo  "<br>";
        echo substr($x,6,5) ."<br>";
        echo substr($x,6) ."<br>";
        echo substr($x, -5, 3) ."<br>";
        echo substr($x, 5,-3) ."<br>";

        // string tokenizer

        $str = "Hello world! have a nice day.";
        $token = strtok($str," ");

        while($token !== false) {
            echo $token . "<br>";
            $token = strtok(" ");            
        }

        echo addcslashes($str,"h") . "<br>";
        echo addslashes('hello world "have" a nice day') . "<br>";

        $str = "World hello World";
        echo chop($str , "World") . "<br>";

        $arr = array("hello","world","have","a","nice","day");
        echo join(" ", $arr) . "<br>";

        echo wordwrap("hello world" , 3, "<br>" ,true)  . "<br>";

        echo __DIR__ . "<br>";
        echo __FILE__ . "<br>";
        echo __LINE__ . "<br>";

        function demo1(){
            echo __FUNCTION__ . "<br>";
        }
        demo1();

    ?>
</body>
</html>