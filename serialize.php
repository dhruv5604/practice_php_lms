<?php

use user as GlobalUser;

class User{
    public $name;

    public function __construct($name){
        $this->name = $name;
    }
}

$user1 = new User("Alice");

// Serialize the object
$serializedUser = serialize($user1);
echo "Serialized: " . $serializedUser . "\n";

// Unserialize the object
$unserializedUser = unserialize($serializedUser);
echo "Unserialized: " . $unserializedUser->name . "\n";