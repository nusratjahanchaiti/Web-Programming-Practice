<?php
session_start();

// STEP 1: Set session variables
$_SESSION["user"] = "John Doe";
$_SESSION["role"] = "Student";

echo "<h3>Session Created</h3>";

// STEP 2: Access session variables
if(isset($_SESSION["user"])) {
    echo "User: " . $_SESSION["user"] . "<br>";
    echo "Role: " . $_SESSION["role"] . "<br>";
} else {
    echo "Session not set<br>";
}

// STEP 3: Modify session variable
$_SESSION["user"] = "Alex Porter";
echo "<br><h3>After Modification:</h3>";
echo "User: " . $_SESSION["user"] . "<br>";

// STEP 4: Destroy session
session_unset();   // remove all variables
session_destroy(); // destroy session

echo "<br><h3>Session Destroyed</h3>";
?>