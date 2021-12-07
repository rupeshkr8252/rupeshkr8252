<!DOCTYPE html>
<html>
<head>  
        <title>Add Products</title>  
      
        <link rel = "stylesheet" type = "text/css" href = "addtype.css">   
    </head>  
  <body>
	
  <p><b>Add the Products</b></p>
	<form method="post" action="products.php">
		ID:<br>
		<input type="text" name="id" required>
		<br>
		Name:<br>
		<input type="text" name="name" required>
		<br>
		Code:<br>
		<input type="text" name="code" required>
		<br>
		Image:<br>  
		<input type="text" name="image" /> <br> <br> 
		Price:<br>
		<input type="number_format" name="price" required>
		<br><br>
		<input type="submit" name="save"  value="Submit">
	</form>
  </body>
</html>