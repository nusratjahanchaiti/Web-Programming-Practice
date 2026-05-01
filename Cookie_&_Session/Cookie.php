<?php
$cookie_name = "user";
$cookie_value = "John Doe";

// STEP 1: Create cookie
setcookie($cookie_name, $cookie_value, time() + 3600, "/");
?>

<html>
<body>

<?php
echo "<h3>Cookie Check</h3>";

// STEP 2: Access cookie
if(isset($_COOKIE[$cookie_name])) {
    echo "User: " . $_COOKIE[$cookie_name] . "<br>";
} else {
    echo "Cookie not set<br>";
}

// STEP 3: Modify cookie
setcookie($cookie_name, "Alex Porter", time() + 3600, "/");
echo "<br>Cookie Modified<br>";

// STEP 4: Delete cookie
setcookie($cookie_name, "", time() - 3600, "/");
echo "Cookie Deleted<br>";
?>

</body>
</html>