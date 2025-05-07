<?php
session_start();
if ($_SESSION['user_type'] !== 'guest') {
    header("Location: login.php");
    exit();
}
echo "<h1>Welcome Guest!</h1>";
