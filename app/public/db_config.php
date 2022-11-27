<?php

$servername = "192.168.1.87"; #IP de la maquina Virtual (host)
$username = "root";
$password = "secret";
$database="TestDB";

// Create connection
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>