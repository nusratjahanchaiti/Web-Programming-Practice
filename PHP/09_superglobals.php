<?php
echo "<h2>Superglobals</h2>";

// $GLOBALS
$x = 10;
$y = 20;
function sum(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
sum();
echo "GLOBALS: x + y = $z<br>";

// $_SERVER
echo "Current script: " . $_SERVER['PHP_SELF'] . "<br>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br><br>";

// $_REQUEST Example
echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">
Name: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_REQUEST['fname'];
    if(empty($name)){
        echo "Name is empty<br>";
    } else {
        echo "Entered Name: $name<br>";
    }
}
?>