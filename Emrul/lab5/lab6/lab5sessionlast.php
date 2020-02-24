<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

	Registration has been done.
	
	<?php

$_SESSION["gender"] = $_POST["gender"];
	$_SESSION["degree"] = $_POST["degree"];
	$_SESSION["BLOOD"] = $_POST["BLOOD"];

$file = fopen("lab5.txt", "w") or die("Unable to open file!");

$txt = "Name: ". $_SESSION["name"]."";
fwrite($file, $txt."\n");


$txt = "Email: ". $_SESSION["email"]."";
fwrite($file, $txt."\n");


$txt = "Gender: ". $_SESSION["gender"]."";
fwrite($file, $txt."\n");


$txt = "Degree: ". $_SESSION["degree"]."";
fwrite($file, $txt."\n");

$txt = "Blood Group: ". $_SESSION["BLOOD"]."";
fwrite($file, $txt."\n");


$txt = "Date of Birth: ". $_SESSION["birthdate"]."";
fwrite($file, $txt."\n");


fclose($file);
?>

</form>
</body>
</html>