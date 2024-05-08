<?php

// Include the necessary files and classes
require_once 'model/db.php'; // Include the model
require_once 'model/controller.php'; // Include the model
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Create a database connection (replace with your actual database connection code)
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'loanapp';
    $db = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    // Check the connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Instantiate the model
    $loanAppModel = new loanapp($db);

    // Extract form data and sanitize it
    $full_name = $_POST['full_name'];
    // Sanitize other form fields...

    // Insert form data into the database
    $formData = array(
        'full_name' => $full_name,
        // Add other form fields...
    );
    $result = $loanAppModel->insertFormData($formData);

    // Close the database connection
    $db->close();

    // Check if the insertion was successful
    if ($result) {
        // Redirect to a success page or display a success message
        header('Location: login.php');
        exit;
    } else {
        // Redirect to an error page or display an error message
        header('Location: error.php');
        exit;
    }
} else {
    // If the form is not submitted, redirect to the form page
    header('Location: register.html');
    exit;
}

?>
