<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired location
header("Location: welcome.php"); // Change "login.php" to your actual login page
exit();
?>