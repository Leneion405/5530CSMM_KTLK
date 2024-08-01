<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register_login.css">
    <script src="../library/jquery-3.7.1.min.js"></script>
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">

            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="firstname">Firstname</label>
                    <input type="text" name="Fistname" id="firstname" autocomplete="off" required>

                </div>
                <div class="field input">
                    <label for="firstname">Lastname</label>
                    <input type="text" name="Lastname" id="lastname" autocomplete="off" required>

                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                    <div id="resultEmail"></div>

                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="confirm_password">Confirm password</label>
                    <input type="password" name="confirm_password" id="confirm_password" autocomplete="off" required>

                </div>

                <div class="field">
                    <div id="result"></div>
                    <input type="button" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="../index.php">Sign In</a>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/register.js"></script>
</body>

</html>