<?php
  
// Username is root
$user = 'root';
$password = ''; 
  
// Database name 
$database = 'customer details'; 
  
// Server is localhost with

$servername='localhost';
$link = mysqli_connect($servername, $user, 
                $password, $database);
  
// Checking for connections
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
?>
