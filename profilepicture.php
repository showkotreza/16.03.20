<!DOCTYPE html>
<html>
<body>

<img src="Company.PNG" alt="company logo" height="70" weight="70">
<p align="right"><a href="index.php">Home |</a>
<a href="login.php">Log in |</a>
<a href="registration.php">Registration |</a></p>

<h1>profile picture</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  


  <img src="download.jpg" alt="download logo" height="70" weight="70">
<br>
<a href="index.php">Choose photo</a>

<br>
  
  <input type="submit" name="submit" value="Submit">  
  
</form>

</body>
</html>