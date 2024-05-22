<?php 
    require ('./php/inc/dbh.inc.php');
    $stmt = $pdo->query("SELECT * FROM deck");
    $decks = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardify</title>
    <link rel = "stylesheet" href = "./css/style.css">
    <link rel = "stylesheet" href = "./css/header.css">
    <link rel = "stylesheet" href = "./css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
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