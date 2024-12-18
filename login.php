<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>CCDI Faculty Evaluation System Admin</title>
    <link rel="icon" type="image/x-icon" href="img/ccdi_logo.png">
    <link rel="stylesheet" type="text/css" href="login.css">
    <style>
        @media screen and (max-width: 768px) {
            body {
                min-height: 80vh !important;
                height: -webkit-fill-available !important;
            }

            html {
                height: -webkit-fill-available !important;
            }
            .loginSide {
                display: none !important;
            }
            .loginForm {
                width: 100% !important;
            }
            .header {
                width: 90% !important;
            }
            .logo {
                width: 80px !important;
                height: auto !important;
                margin-right: 8px !important;
            }

            .titles h1 {
                font-size: 1.2em !important;
                line-height: 1.3 !important;
            }

            .titles h2 {
                font-size: 1em !important;
                line-height: 1.2 !important;
            }
            .welcometxt {
                font-size: 1em !important;
            }
            .container {
                width: 90% !important;
            }
        }
    </style>
</head>
    <body>
        <div class="header">
            <img src="img/ccdi_logo.png" alt="Logo" class="logo">
            <div class="titles">
                <h1>COMPUTER COMMUNICATION DEVELOPMENT INSTITUTE</h1>
                <h2 class="systemName">Faculty Evaluation System</h2>
            </div>
        </div>
        <div class="container">
            <div class="loginSide">
                <img src="img/loginpageImg.png" class="evalImage" alt="Evaluation Image">
            </div>
            <div class="loginForm">
                <p class="welcometxt">Already have an account?</p>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <div class="input-container">
                    <input type="text" id="login" name="uname" required>
                    <div class="labelline">Username</div>
                </div>
                <div class="input-container">
                    <input type="password" name="password" id="password" required>
                    <div class="labelline">Password</div>
                </div>
                <button type="submit">Login</button>
                <div class="register-link-container">
                    <p class="register-txt">Don't have an account?</p> <button id="register-btn">Create Account</button>
                </div>
            </div>
        </div>

        <div id="register-popup" class="register-popup">
            <div class="register-content">
                <span class="close">&times;</span>
                <h2 style="display: flex; justify-content: center; margin-top: 0; padding-right: 20px;">Register</h2>
                    <div class="input-container">
                        <input type="text" id="reg-name" name="reg-name" required>
                        <div class="labelline">Name</div>
                    </div>
                    <div class="input-container">
                        <input type="text" id="reg-email" name="reg-email" required>
                        <div class="labelline">Email</div>
                    </div>
                    <div class="input-container">
                        <input type="text" id="reg-username" name="reg-username" required>
                        <div class="labelline">Username</div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="reg-password" name="reg-password" required>
                        <div class="labelline">Password</div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="confirm-password" name="confirm-password" required>
                        <div class="labelline">Confirm Password</div>
                    </div>
                    <button type="submit">Register</button>
            </div>
        </div>

    <script>
        // Get the modal
        var modal = document.getElementById("register-popup");

        // Get the button that opens the modal
        var btn = document.getElementById("register-btn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    </body>
</html>
