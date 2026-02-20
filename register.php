<?php

// Register.php

// Database connection
$host = 'localhost';
$db = 'your_database'; // Change to your database name
$user = 'your_user'; // Change to your database username
$pass = 'your_password'; // Change to your database password

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "\n" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>