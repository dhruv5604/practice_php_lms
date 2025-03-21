<?php

function bool2str($bool){
    if($bool == false){
        return 'FALSE';
    }

    return 'TRUE';
}


function compareObjects(&$o1,&$o2){
    echo "o1 == o2 : " . bool2str($o1 == $o2) . "<br>"; 
    echo "o1 != o2 : " . bool2str($o1 != $o2) . "<br>"; 
    echo "o1 === o2 : " . bool2str($o1 === $o2) . "<br>"; 
    echo "o1 !== o2 : " . bool2str($o1 !== $o2) . "<br>"; 
}

class Flag{
    public $flag;

    function __construct($flag = true){
        $this->flag = $flag;
    }
}

class OtherFlag{
    public $flag;

    function __construct($flag = true){
        $this->flag = $flag;
    }
}

$o = new Flag();
$p = new Flag();
$q = $p;
$r = new OtherFlag();

echo "Two instances of the class <br>";
compareObjects($o,$p);

echo "<br>Two references to the same class <br>";
compareObjects($p,$q);

echo "<br>instances of two different class<br>";
compareObjects($o,$r);