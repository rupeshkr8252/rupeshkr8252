<?php
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$code = filter_input(INPUT_POST, 'code');
$image = filter_input(INPUT_POST, 'image');
$price = filter_input(INPUT_POST, 'price');

if (!empty($id)){
if (!empty($name)){
if (!empty($code)){
if (!empty($image)){
if (!empty($price)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "phpsamples";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO tblproduct (id, name, code, image,  price)
values ('$id','$name','$code','$image','$price')";
if ($conn->query($sql)){
echo "Product added Successfully!!! ";
 include('newproducts.php'); 

}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
}
}
}
else{
include('database.php');
die();
}
}
else{
include('database.php');
die();
}
?>



