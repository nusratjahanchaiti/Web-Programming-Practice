<?php
echo "<h2>String Functions</h2>";
$str = " Hello World! ";

echo "Replace: " . str_replace("World","PHP",$str) . "<br>";
echo "Trim: '" . trim($str) . "'<br>";

$arr = explode(" ", "Hello PHP World");
echo "Implode: " . implode("-", $arr) . "<br>";

echo "Addslashes: " . addslashes("O'Reilly") . "<br>";
echo "Stripslashes: " . stripslashes("O\'Reilly") . "<br>";
echo "HTML Entities: " . htmlentities("<b>bold</b>") . "<br>";
echo "HTML Decode: " . html_entity_decode("&lt;b&gt;bold&lt;/b&gt;") . "<br>";
?>