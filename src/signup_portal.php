<?php 
    require_once('./php/inc/forms/config_session.inc.php');
    require_once('./php/inc/signup_view.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardify | Signup</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/signup_portal.css">
    <link rel="stylesheet" href="./css/header.css">
</head>
<body>
    <?php include('./php/inc/header.php');?>;
    

    <div class = "container">
        <div class = "register-box">
            <h1>Register</h1>
            <form action = "./php/inc/signup.inc.php" method = "POST">
                <div class = "input-box">
                    <input type = "text" name = "uname_field" placeholder = "Username">
                    <i class='bx bxs-user'></i>
                </div>
                <div class = "input-box">
                    <input type = "password" name = "pword_field" placeholder = "Password">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class = "input-box">
                    <input type = "text" name = "email_field" placeholder = "E-mail">
                    <i class='bx bxs-envelope'></i>
                </div>
                <button type = "submit" class = "submit_button">Signup</button>
            </form>
            <?php 
                check_signup_errors();
            ?>
            
</body>
</html>