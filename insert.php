<!DOCTYPE html>
<head>
<meta charset="ISO-8859-1">
<title>Insert</title>
<link rel = "stylesheet" type = "text/css" href = "insert.css">
</head>
<html>
  <body>
	
	<form method="post" action="process.php"> <br>
		First name:<br>
		<input type="text" name="first_name" required>
		<br><br>
		Last name:<br>
		<input type="text" name="last_name" required>
		<br><br>
		City name:<br>
		<input type="text" name="city_name" required>
		<br><br>
		Phone:<br>  
		<input type="text" name="phone" size="10"/>  
		<br><br>
		Email Id:<br>
		<input type="email" name="email" required>
		<br><br>
		<input type="submit" name="save"  value="Submit">
	</form>
  </body>
</html>