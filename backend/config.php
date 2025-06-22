<?php
$host = 'localhost';
$user = 'root';
$password = ''; // leave blank if no password
$database = 'watamu';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
