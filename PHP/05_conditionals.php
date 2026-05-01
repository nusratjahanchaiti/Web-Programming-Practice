<?php
echo "<h2>Conditional Statements</h2>";
$day = "Friday";

if($day == "Friday"){
    echo "Have a nice weekend!<br>";
} elseif($day == "Sunday"){
    echo "Have a nice Sunday!<br>";
} else {
    echo "Have a nice day!<br>";
}

switch($day){
    case "Friday":
        echo "Weekend is coming!<br>";
        break;
    case "Sunday":
        echo "Relax today!<br>";
        break;
    default:
        echo "Just another day<br>";
}
?>