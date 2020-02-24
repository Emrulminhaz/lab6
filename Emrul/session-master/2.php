<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<body>


<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>


<?php
// Set session variables
$_SESSION["name"] = $_POST["Name"];
$_SESSION["email"] = $_POST["Email"];
$_SESSION["gender"] = $_POST["gender"];
$_SESSION["pass"] = $_POST["pass"];

?>
</body>
</html>





