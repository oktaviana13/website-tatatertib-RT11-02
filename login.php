<?php
// Define username and password for comparison
$valid_username = 'admin'; // Replace with your valid username
$valid_password = 'admin123'; // Replace with your valid password

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the credentials
    if ($username == $valid_username && $password == $valid_password) {
        // Redirect to the admin page after successful login
        header("Location: admin.html");
        exit();
    } else {
        // Redirect back to the login page with an error message
        header("Location: login.html?error=Invalid username or password!");
        exit();
    }
}
?>
