<?php
echo "<h2>Array Sorting</h2>";
$numbers = array(4,2,8,1);

sort($numbers);
echo "Ascending: "; print_r($numbers); echo "<br>";

rsort($numbers);
echo "Descending: "; print_r($numbers); echo "<br>";
?>