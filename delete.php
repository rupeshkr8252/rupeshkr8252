<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "phpsamples");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
$sql = "DELETE FROM tblproduct WHERE id='1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22'";

if(mysqli_query($link, $sql)){
    echo "Records were Deleted Successfully!!!!";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>