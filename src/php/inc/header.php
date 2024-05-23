<?php 
    require ('./php/inc/dbh.inc.php');
    require ('./php/inc/config_session.inc.php');
    $userId = $_SESSION["user_id"];
    $stmt = $pdo->query("SELECT * FROM deck WHERE user_id = $userId");
    $decks = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardify</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/a25306efbe.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/index.js"></script>
    <link rel = "stylesheet" href = "./css/style.css">
    <link rel = "stylesheet" href = "./css/header.css">
    <link rel = "stylesheet" href = "./css/forms.css">
    <link rel = "stylesheet" href = "./css/buttons.css">

    
</head>
<body>
<header>
    <nav>
        <div class = "wrapper">
            <div class = "nav-bar">
                <img src = "img/cardify-high-resolution-logo-white-transparent.svg" height = 60px>
                <div>
                    <!-- THESE ARE ALL TEMPORARY -->
                    <a href = ""><img src = "img/user-icon-alice-blue.svg" width = 30px></a>
                    <a href = "./php/inc/logout.php"><img src = "img/exit-icon-alice-blue.svg" width = 30px></a>
                    <!-- THESE ARE ALL TEMPORARY -->
                </div>
            </div>
        </div>
    </nav>
</header>