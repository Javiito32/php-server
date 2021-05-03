<?php
$servername = "10.5.0.20";
$username = "root";
$password = "contrasenya";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 