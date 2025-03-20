<?php

class Foo{

    public static $name = "Dhruv";

    public static function staticMethod() {
        echo "Hello from static method";
        echo self::$name;
    }
}

$classname = 'Foo';
$classname::staticMethod();
echo "<br>".$classname::$name;




