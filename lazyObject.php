<?php

class User{
    public $name;

    public function __construct(){
        echo "Loading data:";
        $this->name = "User loaded data";
    }

    public function getData(){
        return $this->name;
    }
}

$user = new User();

// unneccesary data wil be print if we don't want to use getData();
// to prevent this we use lazy object.


class LazyObjectUser{
    
    public $name = null;
    public function getData(){
        if($this->name == null){
            echo "Loading data:";
            $this->name = "User loaded data";
        }

        return $this->name;
    } 
}

$user = new LazyObjectUser();
echo $user->getData();

//Now when we create object no unneccesary data wull be print but only when we call getData();

