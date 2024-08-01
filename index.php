<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/register_login.css">
    <script src="./library/jquery-3.7.1.min.js"></script>
    <title>Login</title>
    <style>
        #result {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required value="ktlk@gmail.com">
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required value="Thanlwin123" class="border-alert">
                </div>

                <div class="field">
                    <div id="result"></div>
                    <input type="button" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="./app/register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>
    <script src="./js/login.js"></script>
</body>

</html>