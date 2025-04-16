

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

        // function my2(){
        //     static $x = 0;
        //     echo $x . "<br>";
        //     $x++;
        // }

        // my2();
        // my2();
        // my2();

        // echo "<br>";

        // $a = "total";
        // $b = "amount";

        // ${$a . ucfirst($b)} = "new <br>";

        // echo $totalAmount;

        // class user{
        //     public $name;
        // }

        // $user = null;
        // // echo $user?->name;

        // function minOperations($nums) {
        //     $count = 0;
        //     $temp = $nums;
        //     print_r($temp);
        //     for($i = 0;$i<count($nums)-3;$i++){
        //         if($nums[$i-1] == 0 || $nums[0] == 0 || $nums[count($nums)-1] == 0){
        //             return -1;
        //         }
        //    } 
    
        //    return $count;
        // }

        // minOperations([0,1,1,1,0,0]);

        // $arr = ["id" => 101,"name" => "dhruv","sub" => "PHP"];

        // foreach ($arr as $key => $value) {
        //     ${"PHP_" . $key} = $value;
        // }

        // echo $PHP_id . "<br>";
        // echo $PHP_name . "<br>";
        // echo $PHP_sub . "<br>";



    ?>
</body>
</html>