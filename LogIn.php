<?php

session_start();
include 'connect.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400..700&family=Great+Vibes&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="LogIn.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="stylesheet" href="LogIn.css">
        <title>Pecto's Bakery - Gallery></title>
    </head>

    <body>
        <div id="main-container">
            <div id="login-wrapper" class="form-container">
                <form method="post" action="register.php">
                    <h1>Login</h1>

                    <div class="inputbox">
                        <input type="text" placeholder="Email" name="email" id="email" required>
                    </div>

                    <div class="inputbox">
                        <input type="password" placeholder="Password" name="password" id="password" required>
                    </div>

                    <div class="remember-forgot">
                        <a href="#">Forgot Password?</a>
                    </div>

                    <button type="submit" id="loginBtn">Login</button>

                    <div class="no-account">
                        <p>Don't have an account?
                            <a href="#" id="signUpLink">Sign Up</a>
                        </p>
                    </div>

                </form>
            </div>

            <div id="sign-up-wrapper" class="form-container">
                <form method="post" action="register.php">
                    <h1>Create an Account</h1>
    
                    <div class="inputbox">
                        <input type="text" placeholder="First name" name="firstname" id="firstname" required>
                    </div>
    
                    <div class="inputbox">
                        <input type="text" placeholder="Surname" name="lastname" id="lastname" required>
                    </div>

                    <div class="inputbox">
                        <input type="text" placeholder="Username" name="username" id="username" required>
                    </div>
    
                    <div class="inputbox">
                        <input type="text" placeholder="Email" name="email" id="email" required>
                    </div>

                    <div class="inputbox">
                        <input type="password" placeholder="Password" name="createPassword" id="createPassword" required>
                    </div>
                    
                    <button type="submit" id="signUpBtn">Sign-Up</button>
    
                    <div class="have-account">
                        <p>Already have an account?
                            <a href="#" id="loginLink">Login</a>
                        </p>
                    </div>
                </form>
            </div>

            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1> Want to continue where you left off?</h1>
                        <p>Just enter your personal details to resume activity</p>
                        <button class="hidden" id="loginBtnToggle">Login</button>
                    </div>

                    <div class="toggle-panel toggle-right">
                        <h1>Still not Signed-up?</h1>
                        <p>Kindly sign-up to our website to see all the delicacies we offer just for you.</p>
                        <button class="hidden" id="signUpBtnToggle">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
