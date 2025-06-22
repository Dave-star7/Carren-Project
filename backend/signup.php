<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input
    if (!isset($_POST['name'], $_POST['email'], $_POST['password'])) {
        die("Form data not received correctly.");
    }

    $name = $conn->real_escape_string(trim($_POST['name']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if email already exists
    $check = $conn->query("SELECT id FROM users WHERE email = '$email'");
    if ($check && $check->num_rows > 0) {
        echo "Email already registered.";
        exit();
    }

    // Insert into database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql)) {
        // Redirect to index and show login modal
        header("Location: ../index.php?show=login");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
