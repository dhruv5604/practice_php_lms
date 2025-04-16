<?php

#simple Xml parser

$xml = simplexml_load_file("demo.xml") or die("Error: cannot create object");
foreach ($xml->children() as $book) {
    echo $book->title . "<br>";
    echo $book->author . "<br>";
    echo $book->year . "<br>";
    echo $book->price . "<br>";
    echo "<hr>";
}
?>