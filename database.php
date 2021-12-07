<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "crud";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

$sql = "SELECT first_name, last_name, city_name, phone, email FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " first_name: " . $row["first_name"].     "<br>";
    echo " last_name: " . $row["last_name"].  "<br>";
	echo  " city_name: " . $row["city_name"].  "<br>";
	echo " phone: " . $row["phone"].  "<br>";
	echo " email: " . $row["email"]. "<br>";
 }
} else {
  echo "0 results";
}
$conn->close();

?>