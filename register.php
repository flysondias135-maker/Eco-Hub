<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($username) || empty($email) || empty($password)) {
        $_SESSION['message'] = "Please fill in all required fields.";
        header("Location: sign-up.php");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = "Please enter a valid email address.";
        header("Location: sign-up.php");
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            $_SESSION['message'] = "Registration successful! You can now log in.";
            header("Location: login.php");
            exit();
        } else {
            if ($conn->errno == 1062) {
                $_SESSION['message'] = "Username or Email already exists. Please choose a different one.";
            } else {
                $_SESSION['message'] = "Error during registration: " . $stmt->error;
            }
            header("Location: sign-up.php");
            exit();
        }
        $stmt->close();
    } else {
        $_SESSION['message'] = "Database error: Could not prepare statement. " . $conn->error;
        header("Location: sign-up.php");
        exit();
    }

    $conn->close();
} else {
    header("Location: sign-up.php");
    exit();
}
?>