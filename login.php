

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="view/login.css">
</head>

<body>
    <div class="main" style="background-color: background: #4070f4;">
       
        <form action="" method="post" id="loginform" onsubmit="return validateForm()">
            <div class="box">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                    <span id="usernameError" class="error"></span> <!-- Validation message for username -->
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                    <span id="passwordError" class="error"></span> <!-- Validation message for password -->
                </div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>

    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var usernameError = document.getElementById("usernameError");
            var passwordError = document.getElementById("passwordError");

            // Reset previous error messages
            usernameError.innerText = "";
            passwordError.innerText = "";

            // Check if fields are empty
            if (username.trim() === "") {
                usernameError.innerText = "Username cannot be empty";
                return false;
            }

            if (password.trim() === "") {
                passwordError.innerText = "Password cannot be empty";
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
