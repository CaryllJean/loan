<?php

require_once 'model/db.php'; // Include the model

class LoanAppController {
    private $model;

    public function __construct($db) {
        // Create an instance of the model
        $this->model = new loanapp($db);
    }

    public function handleFormSubmission() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sanitize and validate form data
            $formData = array(
                'r_type' => $this->sanitizeInput($_POST['account_type']),
                'r_name' => $this->sanitizeInput($_POST['full_name']),
                'r_address' => $this->sanitizeInput($_POST['address']),
                'r_bday' => $this->sanitizeInput($_POST['date_of_birth']),
                'r_age' => $this->sanitizeInput($_POST['age']),
                'r_email' => $this->sanitizeInput($_POST['email']),
                'r_number' => $this->sanitizeInput($_POST['phone_number']),
                'r_gender' => $this->sanitizeInput($_POST['gender']),
                'r_bankname' => $this->sanitizeInput($_POST['bank_name']),
                'r_baccnumber' => $this->sanitizeInput($_POST['bank_account_number']),
                'r_chname' => $this->sanitizeInput($_POST['card_holder_name']),
                'r_tinnum' => $this->sanitizeInput($_POST['tin_number']),
                'r_comname' => $this->sanitizeInput($_POST['company_name']),
                'r_compadd' => $this->sanitizeInput($_POST['company_address']),
                'r_comnum' => $this->sanitizeInput($_POST['company_phone_number']),
                'r_position' => $this->sanitizeInput($_POST['position']),
                'r_monearn' => $this->sanitizeInput($_POST['monthly_earnings']),
                // Handle file uploads separately
                'r_pbilling' => $_FILES['proof_of_billing']['name'],
                'r_valid' => $_FILES['valid_id_primary']['name'],
                'r_coe' => $_FILES['certificate_of_employment']['name'],
                'r_username' => $this->sanitizeInput($_POST['username']),
                'r_password' => $this->sanitizeInput($_POST['password'])
            );

            // Move uploaded files to desired directory (ensure proper file upload configuration and permissions)
            $targetDir = "uploads/";
            move_uploaded_file($_FILES['proof_of_billing']['tmp_name'], $targetDir . basename($_FILES['proof_of_billing']['name']));
            move_uploaded_file($_FILES['valid_id_primary']['tmp_name'], $targetDir . basename($_FILES['valid_id_primary']['name']));
            move_uploaded_file($_FILES['certificate_of_employment']['tmp_name'], $targetDir . basename($_FILES['certificate_of_employment']['name']));

            // Pass sanitized form data to the model to insert into the database
            $this->model->insertFormData($formData);

            // Redirect or display success message
            // Example: header("Location: success.php");
        }
    }

    // Function to sanitize input data
    private function sanitizeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

?>
