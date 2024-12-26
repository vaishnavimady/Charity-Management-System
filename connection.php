<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "charity database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn)
 {
    //echo "connection ok" 
} 
else{
    echo  "Connection failed: ".mysqli_connect_error();
}

?>
