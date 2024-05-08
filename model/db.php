<?php

class loanapp {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function insertFormData($formData) {
        // Prepare and bind parameters
        $stmt = $this->db->prepare("INSERT INTO registertbl (r_type, r_name, r_address, r_gender, r_bday, r_age, r_email, r_num, r_bankname, r_baccnumber, r_chname, r_tinnum, r_comname, r_comadd, r_comnumb, r_position, r_monearn, r_pbilling, r_valid, r_coe, r_username, r_password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bind_param("ssssissssssissssssss", $formData['r_type'], $formData['r_name'], $formData['r_address'], $formData['r_bday'], $formData['r_age'], $formData['r_email'], $formData['r_number'], $formData['r_gender'], $formData['r_bankname'], $formData['r_baccnumber'], $formData['r_chname'], $formData['r_tinnum'], $formData['r_comname'], $formData['r_compadd'], $formData['r_comnum'], $formData['r_position'], $formData['r_monearn'], $formData['r_pbillling'], $formData['r_valid'], $formData['cr_coe'], $formData['r_username'], $formData['r_password']);

        // Execute the statement
        $stmt->execute();

        // Check for errors
        if ($stmt->errno) {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }
}

?>
