<!DOCTYPE html>
<html>
<body>
<h2>File Upload Example</h2>

<form action="" method="post" enctype="multipart/form-data">
Select image: <input type="file" name="fileToUpload">
<input type="submit" name="submit" value="Upload">
</form>

<?php
if(isset($_FILES["fileToUpload"])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
        echo "File ". basename($_FILES["fileToUpload"]["name"]). " uploaded successfully.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
</body>
</html>