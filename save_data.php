<?php
// Retrieve form data
$prefix = $_POST['prefix'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$password = $_POST['password'];

// Connect to your database
$conn = new mysqli('localhost', 'u533521481_tom', 'Kubico2024', 'u533521481_tomdata');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into database
$sql = "INSERT INTO user_entries (prefix, phone_number, email, password) 
        VALUES ('$prefix', '$phone_number', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
