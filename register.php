<?php
// Database connection details
$servername = "localhost";
$username = "kamani";
$password = "kondamanoj9989";
$dbname = "database-1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (kamani, kondamanoj9989, database-1)");
$stmt->bind_param("sss", $username, $email, $hashed_password);

// Set parameters and execute
$username = $_POST['username'];
$email = $_POST['email'];
$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
