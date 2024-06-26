<?php 
    require ('./php/inc/dbh.inc.php');
    require ('./php/inc/config_session.inc.php');
    if(isset($_SESSION["user_id"])){
        $userId = $_SESSION["user_id"];
        $stmt = $pdo->query("SELECT * FROM deck WHERE user_id = $userId");
        $decks = $stmt->fetchAll();
    }
    else{
        require_once ('./php/inc/config_session.inc.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardify</title>
    <script src="https://use.fontawesome.com/a25306efbe.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "./css/style.css">
    <link rel = "stylesheet" href = "./css/header.css">
    <link rel = "stylesheet" href = "./css/buttons.css">
    <link rel = "stylesheet" href = "./css/forms.css">
    <link rel = "stylesheet" href = "./css/cards.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="./js/card.js"></script>
    <script src="./js/modal.js"></script>
    <script src="./js/index.js"></script>
</head>
<body>
<header>
    <nav>
        <div class = "wrapper">
            <div class = "nav-bar">
                <a href = "signup_portal.php"><img src = "img/cardify-high-resolution-logo-white-transparent.svg" height = 60px></a>
            </div>
        </div>
    </nav>
</header>