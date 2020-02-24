<!DOCTYPE HTML>  
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Registration form with session</title>
</head>
<body>  

 
<div class="Form-validation">
<form  action="lab5session.php" method="post">
  <table>
  <tr class="row">
  <td class="Label"> <LABEL for="name">NAME</LABEL></td>
    <td><input class="text" type="text" id="name" name="name" placeholder="NAME">
    <?php
if (isset($error_msg["name"]))
  {echo "<div class='error'>".$error_msg["name"]."</div>";
}
?>
</td> 
  </tr>
  <tr class="row">
    <td class="Label"> <LABEL for="email">E-MAIL</LABEL></td>
    <td><input class="text" type="text" id="email" name="email" placeholder="E-Mail">
    <?php
if (isset($error_msg["email"]))
{
  echo "<div class='error'>".$error_msg["email"]."</div>";
}
?></td> </tr>
    <tr class="row">
  <td class="Label"> <LABEL for="password">password</LABEL></td>
   <td><input type="password" name="password" id="password" >
   <?php
if (isset($error_msg["password"]))
{
  echo "<div class='error'>".$error_msg["password"]."</div>";
}
?></td></tr>

 <tr class="row">
  <td class="Label"> <LABEL for="gender">Gender</LABEL></td>
  <td> 
  <input type="radio" name="gender" value="female" id="gender"
  <?php if (isset($gender) && $gender ='female') echo "checked='checked'"; ?> />
  <Label for="gender">Female</Label>
  <input type="radio" name="gender" value="Male" id="gender"
  <?php if (isset($gender) && $gender ='Male') echo "checked='checked'"; ?> />
  <Label for="gender">Male</Label>
  <input type="radio" name="gender" value="Other" id="gender"
  <?php if (isset($gender) && $gender ='Other') echo "checked='checked'"; ?> />
  <Label for="gender">Other</Label>
   <?php
if (isset($error_msg["gender"]))
{
  echo "<div class='error'>".$error_msg["gender"]."</div>";
}
?></td></tr>

 <tr class="row">
  <td class="Label"> <LABEL for="submit"></LABEL></td>
  <td><input type="submit" name="form" ></td></tr>


</table>
</form>
</div>
