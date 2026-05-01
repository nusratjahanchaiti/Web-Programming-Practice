<?php 
$servername = "localhost";
$username = "root";  
$password = "";      
$database = "user";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "Not connected";
} else {

    // CREATE TABLE
    $sql = "CREATE TABLE employee (
        employid INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        age INT,
        designation VARCHAR(100),
        salary FLOAT
    )";
    mysqli_query($conn, $sql);

    // INSERT
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $designation = $_POST['designation'];
        $salary = $_POST['salary'];

        $sql = "INSERT INTO employee(name, age, designation, salary) 
                VALUES('$name', '$age', '$designation', '$salary')";
        mysqli_query($conn, $sql);
    }

    // UPDATE
    if(isset($_POST['update'])){
        $id = $_POST['employid'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $designation = $_POST['designation'];
        $salary = $_POST['salary'];

        $sql = "UPDATE employee 
                SET name='$name', age='$age', designation='$designation', salary='$salary' 
                WHERE employid=$id";
        mysqli_query($conn, $sql);
    }

    // DELETE
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = "DELETE FROM employee WHERE employid=$id";
        mysqli_query($conn, $sql);
    }

    // READ
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($conn, $sql);

    $employeeInfo = array();  

    while ($row = mysqli_fetch_assoc($result)) {
        $employeeInfo[] = $row;    
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Employee Management</title>
</head>

<body>

<h2>Employee Form</h2>

<form method="POST">
    ID: <input type="text" name="employid"><br><br>
    Name: <input type="text" name="name"><br><br>
    Age: <input type="number" name="age"><br><br>
    Designation: <input type="text" name="designation"><br><br>
    Salary: <input type="number" name="salary"><br><br>

    <button type="submit" name="add">Add</button>
    <button type="submit" name="update">Update</button>
</form>

<br>

<h2>Employee List</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Designation</th>
    <th>Salary</th>
    <th>Action</th>
</tr>

<?php for ($i = 0; $i < count($employeeInfo); $i++) { ?>
<tr>
    <td><?php echo $employeeInfo[$i]['employid']; ?></td>
    <td><?php echo $employeeInfo[$i]['name']; ?></td>
    <td><?php echo $employeeInfo[$i]['age']; ?></td>
    <td><?php echo $employeeInfo[$i]['designation']; ?></td>
    <td><?php echo $employeeInfo[$i]['salary']; ?></td>
    <td>
        <a href="?delete=<?php echo $employeeInfo[$i]['employid']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>