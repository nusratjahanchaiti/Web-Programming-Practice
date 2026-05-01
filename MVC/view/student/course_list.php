<!DOCTYPE html>
<html>
<head>
    <title>Course List</title>
</head>
<body>
    <form method="POST" action="index.php">
    <h3>Add Course</h3>
    <input type="text" name="title" placeholder="Course Title">
    <input type="number" name="credits" placeholder="Credits">
    <button type="submit" name="add_course">Add</button>
</form>

<h2>Course List</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Credits</th>
    </tr>

    <?php while ($row = $courses->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['credits']; ?></td>
        </tr>
    <?php } ?>

</table>

</body>
</html>