  
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
     
$servername = "localhost";
$username = "root";
$password = "PASSWORD";
$db = "login";
$table ="users";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);

 
// Check connection

 if ($conn->connect_error) {
  echo("Connection failed: " . $conn->connect_error);
  exit();
}

echo "Connected successfully";

?>