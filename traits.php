<?php

trait hello{
    public function sayHello(){
        echo "Hello";
    }
}

trait world{
    public function sayWorld(){
        echo "World<br>";
    }
}

class MyHelloWorld{
    use hello,world;
    public function sayHelloWorld(){
        $this->sayHello();
        $this->sayWorld();
    }
}

$o = new MyHelloWorld();
$o->sayWorld();


trait A{
    public function bigTalk(){
        echo 'A' . "<br>";
    }

    public function smallTalk(){
        echo 'a'. "<br>";
    }
}


trait B{
    public function bigTalk(){
        echo "B<br>";
    }

    public function smallTalk(){
        echo "b<br>";
    }
}

class Talker{
    use A,B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

$t1 = new Talker();
$t1->smallTalk();
$t1->bigTalk();


trait anotherHello{
    public function sayHelloWorld(){
        echo "Hello" . $this->getWorld()."<br>";
    }

    abstract public function getWorld();
}

class MyHelloWorld2{
    private $world;
    use anotherHello;
    public function getWorld(){
        return $this->world."<br>";
    }

    public function setWorld($world){
        $this->world = $world;
    }
}


$obj = new MyHelloWorld2();
$obj->setWorld("world");
$obj->sayHelloWorld();

trait counter{
    public function inc(){
        static $c = 0;
        $c++;
        echo "$c<br>";
    }
}

class C1{
    use counter;
}

class C2{
    use counter;
}

$c1 = new C1();
$c1->inc();
$c1->inc();
$c1->inc();

$c2 = new C2();
$c2->inc();
$c2->inc();