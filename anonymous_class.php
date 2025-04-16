<?php

$obj = new class{
    public function sayHello(){
        return "Hello world from anaonymous class<br>";
    }
};

echo $obj->sayHello();

$obj = new class("dhruv"){
    public $name;
    public function __construct($name){
        $this->name = $name;      
    }

    public function greet(){
        return "Hello, " . $this->name . "<br>";
    }
};

echo $obj->greet();

interface logger{
    public function log($message);
}

$obj = new class implements logger{
    public function log($message){
        return "Message: " . $message . "<br>";      
    }
};

echo $obj->log("Hello this is dhruv.");


class Animal{
    public function speak(){
        return "Some Sound<br>";
    }
}

$dog = new class extends Animal{
    public function speak(){
        return "Barks<br>";
    }
};

echo $dog->speak();