<?php
if (isset($_FILES["fileToUpload"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<h1>The file: <h2> ". basename( $_FILES["fileToUpload"]["name"]). "</h2><h1> has been uploaded.</h1>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>

<!DOCTYPE html>
<html>
<style>
    
</style>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Add image
    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    <!--<input type="submit" value="Upload File" name="submit" class='uploadFile'>-->
</form>

</body>
</html>