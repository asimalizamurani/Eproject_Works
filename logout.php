<?php
// include("dbcon.php");
// Start the session
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to the login page or any other page you want
header("Location: login.html");
exit;
?>