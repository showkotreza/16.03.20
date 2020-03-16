<!DOCTYPE html>
<html>
<body>

<img src="Company.PNG" alt="company logo" height="70" weight="70">
<p align="right"><a href="index.php">Home |</a>
<a href="login.php">Log in |</a>
<a href="registration.php">Registration |</a></p>

<h1>Changepassword</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <hr>
  
 Current Password:  <input type="text" name="current password">
  <br>
  New Password: <input type="text" name="new password">
  <br>
Re type Password: <input type="text" name="re type password">
  <br>

  <hr>
  <input type="submit" name="submit" value="Submit">  
    
</form>

</body>
</html>