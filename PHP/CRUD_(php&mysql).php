<?php 
$servername = "localhost";
$username = "root";  
$password = "";      
$database = "user";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "not connected";
} else {

    // INSERT
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $sql = "INSERT INTO student(name) VALUES('$name')";
        mysqli_query($conn, $sql);
    }

    // UPDATE
    if(isset($_POST['update'])){
        $id = $_POST['sid'];
        $name = $_POST['name'];
        $sql = "UPDATE student SET name='$name' WHERE sid=$id";
        mysqli_query($conn, $sql);
    }

    // DELETE
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = "DELETE FROM student WHERE sid=$id";
        mysqli_query($conn, $sql);
    }

    // READ
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql);

    $studentInfo = array();  

    while ($row = mysqli_fetch_assoc($result)) {
        $studentInfo[] = $row;    
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Management</title>
</head>

<body>

<!-- FORM -->
<form method="POST">
    ID: <input type="text" name="sid"><br>
    Name: <input type="text" name="name"><br>

    <button type="submit" name="add">Add</button>
    <button type="submit" name="update">Update</button>
</form>

<br>

<!-- DISPLAY -->
<ul>
<?php for ($i = 0; $i < count($studentInfo); $i++) { ?>

    <?php echo $studentInfo[$i]['sid'] . " - " . $studentInfo[$i]['name']; ?>
    <a href="?delete=<?php echo $studentInfo[$i]['sid']; ?>">Delete</a>

<?php } ?>
</ul>

</body>
</html>