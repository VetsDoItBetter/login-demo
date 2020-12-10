  
<?php
$servername = "localhost";
$username = "root";
$password = "PASSWORD";
$db = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection

 if ($conn->connect_error) {
  echo("Connection failed: " . $conn->connect_error);
  exit();
}
?>