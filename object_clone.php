<?php

class User{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}

$alice = new User("Alice");
$bob = clone $alice;

$bob->name = "Bob";

echo $alice->name . "<br>";
echo $bob->name;