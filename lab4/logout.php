<?php 

session_start(); // Start the session

// Destroy the session
session_unset();  // Remove all session variables
session_destroy();  // Destroy the session

header("Location: log_in.php"); // Redirect to home page
exit();
?>
