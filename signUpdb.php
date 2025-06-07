<?php
session_start();
require 'db.php'; // Your DB connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $pass_raw = $_POST["pass"]; // Get plain password from form
    $pass_hashed = password_hash($pass_raw, PASSWORD_DEFAULT);

    // Check if username already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['alert'] = "Username already exists!";
        $_SESSION['redirect_after_alert'] = "index.php";
    } else {
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (username, pass) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $pass_hashed);
        
        if ($stmt->execute()) {
            $_SESSION['user'] = [
                'username' => $username
            ];
            $_SESSION['alert'] = "Sign up successful! Welcome, $username";
            $_SESSION['redirect_after_alert'] = "index.php";
        } else {
            $_SESSION['alert'] = "Sign up failed. Please try again.";
            $_SESSION['redirect_after_alert'] = "index.php";
        }
    }

    header("Location: index.php");
    exit();
}
?>