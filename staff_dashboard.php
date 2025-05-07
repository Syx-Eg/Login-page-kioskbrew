<?php
session_start();
if ($_SESSION['user_type'] !== 'staff') {
    header("Location: login.php");
    exit();
}
echo "<h1>Welcome KUPAL KABA BOSS? " . $_SESSION['email'] . "</h1>";
// user: staff@example.com pass:password123 