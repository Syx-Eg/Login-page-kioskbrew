<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Simulated staff login credentials for demo
    $valid_email = "staff@example.com";
    $valid_password = "password123";

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['user_type'] = 'staff';
        $_SESSION['email'] = $email;
        header("Location: staff_dashboard.php");
        exit();
    } else {
        $_SESSION['error'] = "Invalid email or password.";
        header("Location: login.php");
        exit();
    }
}

if (isset($_POST['guest'])) {
    $_SESSION['user_type'] = 'guest';
    header("Location: guest_dashboard.php");
    exit();
}
?>
