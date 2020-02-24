<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<title>Registration</title>
</head>
<body>


	<?php
// define variables and set to empty values
$NameErr = $EmailErr = $genderErr = $passErr = "";
$Name = $Email = $gender = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Name"])) {
    $NameErr = "Name is required";
  } else {
    $Name = test_input($_POST["Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Name)) {
      $NameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["Email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "Invalid email format";
    }
  }
    

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
  }
  
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


	<form method="post" action="2.php" >
		Name <input type="text" name="Name" value="<?php echo $Name;?>">
  <span class="error">* <?php echo $NameErr;?></span> <br>
		Email <input type="text" name="Email" value="<?php echo $Email;?>">
  <span class="error">* <?php echo $EmailErr;?></span><br>
		Gender  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  			    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  			    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other 
				<span class="error">* <?php echo $genderErr;?></span>
				<br>
    Password <input type="Password" name="pass" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span> <br>
  	
		<input type="submit" value="Submit"> <br>
	</form>



<?php
class User {
  public $Name;
  public $Email;
  public $gender;
  public $pass;

  function __construct($Name, $Email, $gender, $pass) {
    $this->Name = $Name; 
    $this->Email = $Email;
    $this->gender = $gender; 
    $this->pass = $pass; 
  }
  function get_name() {
    return $this->Name;
  }
  function get_email() {
    return $this->Email;
  }
  function get_gender() {
    return $this->gender;
  }
  function get_pass() {
    return $this->pass;
  }
}

$user = new User($Name, $Email, $gender, $pass);
echo $user->get_name();
echo "<br>";
echo $user->get_email();
echo "<br>";
echo $user->get_gender();
echo "<br>";
echo $user->get_pass();
?>
 
</body>
</html>
