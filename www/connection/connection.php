<?php
$servername = "10.5.0.20"; //Don't change this unless you know exactly what you're doing, it's the docker's network address of database
$username = "root";
$password = "contrasenya";

$conn = new mysqli($servername, $username, $password, "mainDB");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 
