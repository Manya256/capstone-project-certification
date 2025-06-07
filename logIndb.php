<?php
session_start();
require 'db.php'; // adjust this to your DB connection script

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $user = $result->fetch_assoc()) {
        // ✅ Use password_verify to compare with hashed password
        if (password_verify($password, $user['pass'])) {
            $_SESSION['user'] = [
                'username' => $user['username']
            ];
            $_SESSION['alert'] = "Login successful!";
            $_SESSION['redirect_after_alert'] = "index.php";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['alert'] = "Incorrect password.";
            $_SESSION['redirect_after_alert'] = "index.php";
            header("Location: index.php");
            exit();
        }
    } else {
        $_SESSION['alert'] = "User not found.";
        $_SESSION['redirect_after_alert'] = "index.php";
        header("Location: index.php");
        exit();
    }
}
?>
