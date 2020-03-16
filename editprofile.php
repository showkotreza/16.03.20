<!DOCTYPE html>
<html>
<body>

<img src="Company.PNG" alt="company logo" height="70" weight="70">
<p align="right"><a href="index.php">Home |</a>
<a href="login.php">Log in |</a>
<a href="registration.php">Registration |</a></p>

<h1>Edit profile</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br>
  <input type="submit" name="submit" value="Submit">  
  
</form>

</body>
</html>