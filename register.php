<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="view/register.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>Registration</header>

        <form action="submit_form.php">
            <div class="form first">
                <div class="details personal">
                    <span class= "title">Personal Details</span>

                    <div class="fields">

                    <div class="input-fields">
                            <label>Account Type</label>
                            <input type="text" placeholder = "Basic or Premium" required >
                        </div>

                        <div class="input-fields">
                            <label>Full Name</label>
                            <input type="text" placeholder = "Enter your name" required>
                        </div>

                        <div class="input-fields">
                            <label>Address</label>
                            <input type="text" placeholder = "Enter your address" required>
                        </div>

                        <div class="input-fields">
                            <label>Date of Birth</label>
                            <input type="date" placeholder = "Enter birth date" required>
                        </div>

                        <div class="input-fields">
                            <label>Age</label>
                            <input type="text" placeholder = "Enter your age" required>
                        </div>

                
                        <div class="input-fields">
                            <label>Email</label>
                            <input type="text" placeholder = "Enter your email"required >
                        </div>

                        <div class="input-fields">
                            <label>Phone number</label>
                            <input type="text" placeholder = "Enter your phone number" required>
                        </div>

                            <div class="input-fields">

                        <label>Gender</label>
                            <div class="gender-options">
                            <label class="gender-option">
                            <input type="radio" name="gender" value="male">
                            <span class="circle"></span> Male
                         </label>
                            <label class="gender-option">
                            <input type="radio" name="gender" value="female">
                            <span class="circle"></span> Female
                         </label>
                            <label class="gender-option">
                            <input type="radio" name="gender" value="other">
                            <span class="circle"></span> Other
                         </label>
                        </div>

                    </div>
                </div>

                <div class=" details ID">
                    <span class= "title">Bank Details</span>

                    <div class="fields">

                        <div class="input-fields">
                            <label>Bank Name</label>
                            <input type="text" placeholder = "Enter bank name" required>
                        </div>

                        <div class="input-fields">
                            <label>Bank Account Number</label>
                            <input type="text" placeholder = "Enter bank account number"required >
                        </div>

                        <div class="input-fields">
                            <label>Card Holder's Name</label>
                            <input type="text" placeholder = "Enter card holders name" required>
                        </div>

                        <div class="input-fields">
                            <label>Tin Number</label>
                            <input type="number" placeholder = "Enter tin number" required>
                        </div>
                    </div>
                </div>

                <div class="company details">
                    <span class= "title">Company Working With</span>

                    <div class="fields">

                    <div class="input-fields">
                            <label>Company Name</label>
                            <input type="text" placeholder = "Enter company name" required>
                        </div>

                        <div class="input-fields">
                            <label>Company Address</label>
                            <input type="text" placeholder = "Enter company address"required >
                        </div>

                        <div class="input-fields">
                            <label>Company Phone Number</label>
                            <input type="number" placeholder = "Enter company phone number"required >
                        </div>

                        <div class="input-fields">
                            <label>Position</label>
                            <input type="text" placeholder = "Enter position" required>
                        </div>

                        <div class="input-fields">
                            <label>Monthly Earnings</label>
                            <input type="text" placeholder = "Enter monthly earnings"required >
                        </div>

                        <div class="input-fields">
                            <label>Proof of Billing</label>
                            <input type="file" accept="image/*" id="proofOfBilling" name="proofOfBilling"required>
                        </div>

                        <div class="input-fields">
                            <label>Valid ID Primary</label>
                            <input type="file" accept="image/*" id="validIdPrimary" name="validIdPrimary"required>
                        </div>

                        <div class="input-fields">
                            <label>Certificate of Employment</label>
                            <input type="file" accept="image/*" id="certificateOfEmployment" name="certificateOfEmployment"required>
                        </div>

                    </div>
                </div>

                <div class=" details ID">
                    <span class= "title">Login Credentials</span>

                    <div class="fields">

                        <div class="input-fields">
                            <label>Username</label>
                            <input type="text" placeholder = "Enter username"required >
                        </div>

                        <div class="input-fields">
                            <label>Password</label>
                            <input type="text" placeholder = "Enter password" required>
                        </div>

                        <div class="input-fields">
                            <label>Confirm Password</label>
                            <input type="text" placeholder = "Confirm Password" required>
                        </div>                    
                    </div>

                   <button class ="submitbtn">
                    <span class = "btntext">Submit</span>
                   </button>
                 
                  </div>
                </div>
            </div>

        </form>
    </div>
    <script src = "view/script.js"> </script>
</body>
</html>