<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_or_email = trim($_POST['username_or_email']);
    $password = $_POST['password'];

    if (empty($username_or_email) || empty($password)) {
        $_SESSION['message'] = "Please fill in all fields.";
        header("Location: ../login.php");
        exit();
    }

    $sql = "SELECT id, username, email, password FROM users WHERE username = ? OR email = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ss", $username_or_email, $username_or_email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $username, $email, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;

                $_SESSION['message'] = "Welcome, " . $username . "!";
                header("Location: ../home.php");
                exit();
            } else {
                $_SESSION['message'] = "Invalid username/email or password.";
                header("Location: ../login.php");
                exit();
            }
        } else {
            $_SESSION['message'] = "Invalid username/email or password.";
            header("Location: ../login.php");
            exit();
        }
        $stmt->close();
    } else {
        $_SESSION['message'] = "Database error: Could not prepare statement. " . $conn->error;
        header("Location: ../login.php");
        exit();
    }
    $conn->close();
} else {
    header("Location: ../login.php");
    exit();
}
?>