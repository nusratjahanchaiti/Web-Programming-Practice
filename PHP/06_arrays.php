<?php
echo "<h2>Arrays</h2>";

// Numeric Array
$fruits = array("Apple", "Banana", "Orange");
echo "Numeric Array: " . $fruits[1] . "<br>";

// Associative Array
$ages = array("Alice"=>25, "Bob"=>30);
echo "Associative Array: Alice's Age = " . $ages["Alice"] . "<br>";

// Multidimensional Array
$students = array(
    array("Alice", 25),
    array("Bob", 30)
);
echo "Multidimensional Array: " . $students[1][0] . "<br>";
?>