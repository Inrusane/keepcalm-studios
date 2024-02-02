<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate and process the data (you may add more validation and security measures)
    if (!empty($username) && !empty($password)) {
        // Hash the password for security
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Save the data to a file, database, or any storage method of your choice
        // For demonstration purposes, we'll save to a text file
        $userData = "$username:$hashedPassword\n";
        file_put_contents('users.txt', $userData, FILE_APPEND);

        // Redirect to index.html upon successful registration
        header("Location: index.html");
        exit();
    } else {
        echo "Please fill in all the fields.";
    }
}
?>