<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = isset($_POST['subject']) ? $_POST['subject'] : null; // Subject is optional
    $message = $_POST['message'];

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $_SESSION['contact_message'] = "Please fill in all required fields (Name, Email, Message).";
        header("Location: contact-us.php");
        exit();
    }

    // Prepare an insert statement
    $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        if ($stmt->execute()) {
            $_SESSION['contact_message'] = "Your message has been sent successfully!";
            $_SESSION['contact_status'] = 'success';
            header("Location: contact-us.php");
            exit();
        } else {
            $_SESSION['contact_message'] = "Error sending your message: " . $stmt->error;
            $_SESSION['contact_status'] = 'error';
            header("Location: contact-us.phpphp");
            exit();
        }
        $stmt->close();
    } else {
        $_SESSION['contact_message'] = "Error preparing statement: " . $conn->error;
        $_SESSION['contact_status'] = 'error';
        header("Location: contact-us.php");
        exit();
    }
    $conn->close();
} else {
    header("Location: contact-us.php");
    exit();
}
?>