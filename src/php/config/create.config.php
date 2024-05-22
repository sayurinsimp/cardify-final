<?php
if (isset($_POST['submit'])) {
    require('../inc/dbh.inc.php');
    require_once('../inc/config_session.inc.php');
    $posted_deck_name = htmlspecialchars($_POST['deck_name']);
    $userId = $_SESSION["user_id"];
    if (!empty($posted_deck_name)) { 
        $sql = "INSERT INTO deck(deck_name, user_id) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$posted_deck_name, $userId]);
        
        header('Location: ../../index.php');
        exit();
        
    } else {
        header('Location: ../../index.php?fields=empty');
        exit();
    }
}