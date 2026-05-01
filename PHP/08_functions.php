<?php
echo "<h2>Functions</h2>";

function greet($name){
    echo "Hello, $name!<br>";
}
greet("Alice");

function add($x, $y){
    return $x + $y;
}
echo "Addition: 5 + 10 = " . add(5,10) . "<br>";
?>