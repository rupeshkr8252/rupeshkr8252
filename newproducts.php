<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "phpsamples";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

$sql = "SELECT id, name, code, image, price FROM tblproduct";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " id: " . $row["id"].     "<br>";
    echo " name: " . $row["name"].  "<br>";
    echo  " code: " . $row["code"].  "<br>";
    echo " image: " . $row["image"].  "<br>";
    echo " price: " . $row["price"]. "<br>";
 }
} else {
  echo "0 results";
}
$conn->close();

?>