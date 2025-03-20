<?php

interface I{
    public function demo();
}

interface F{
    public function display();
}

interface M extends I,F{
    public function final();
}

class classA implements I,F{
    public function demo(){
        echo "class A<br>";
    }

    public function display(){
        echo "display from Class A.<br>";
    }
}

class classB implements I{
    public function demo(){
        echo "class B<br>";
    }
}

class classC implements M{
    public function demo(){
        echo "class C<br>";
    }

    public function display(){
        echo "display from class C<br>";
    }

    public function final(){
        echo "final from class C<br>";
    }
}

$ca = new classA();
$ca->demo();
$ca->display();

$cb = new classB();
$cb->demo();

$cc = new classC();
$cc->demo();
$cc->display();
$cc->final();