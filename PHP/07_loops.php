<?php
echo "<h2>Loops</h2>";

// While loop
$i = 1;
while($i <= 5){
    echo "While: $i ";
    $i++;
}
echo "<br>";

// Do-While loop
$i = 1;
do {
    echo "Do-While: $i ";
    $i++;
} while($i <= 5);
echo "<br>";

// For loop
for($i=1;$i<=5;$i++){
    echo "For: $i ";
}
echo "<br>";

// Foreach loop
$colors = array("Red","Green","Blue");
foreach($colors as $color){
    echo "Foreach: $color ";
}
?>