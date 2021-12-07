<?php
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$city_name = filter_input(INPUT_POST, 'city_name');
$phone = filter_input(INPUT_POST, 'phone');
$email = filter_input(INPUT_POST, 'email');

if (!empty($first_name)){
if (!empty($last_name)){
if (!empty($city_name)){
if (!empty($phone)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "crud";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO employee (first_name, last_name, city_name, phone,  email)
values ('$first_name','$last_name','$city_name','$phone','$email')";
if ($conn->query($sql)){
echo "******Order Successfully Placed******";
 include('ordered.php'); 

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



