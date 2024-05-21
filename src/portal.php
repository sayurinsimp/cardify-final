<?php 
    require_once('./php/inc/config_session.inc.php');
    require_once('./php/inc/login_view.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardify | Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/portal.css">
</head>
<body>
    <div class = "left">
        <div class="intro-text-container">
            <img src = "./img/alice_blue_rectangle.png">
            <h1>Make studying easier with Cardify!</h1>
        </div>
    </div>
    <div class="right">
        <div class="input-wrapper">
            <!-- LOGIN -->
            <h1>Login</h1>
            <form action = "./php/inc/login.inc.php" method = "POST">
            <div class = "input-box">
                    <input type = "text" name = "uname_field" placeholder = "Username">
                    <i class='bx bxs-user'></i>
                </div>
                <div class = "input-box">
                    <input type = "password" name = "pword_field" placeholder = "Password">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type = "submit" class = "submit_button">Login</button>
            </form>
            <?php 
                check_login_errors();
            ?>
            <!-- REGISTER -->
            <div class = "signup-link">
                <form action = "" method = "post">
                    <p>Don't have an account? <a href = "./signup_portal.php"><br>Signup now!</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>