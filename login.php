<?php
// Check if form is submitted
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Example of checking username and password (replace with your authentication logic)
    if ($username === "admin" && $password === "P@ssw0rd807") {
        // Authentication successful, redirect to dashboard or any other page
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        // Authentication failed, redirect back to login page with error message
        header("Location: index.php?error=1");
        exit;
    }
}
?>
