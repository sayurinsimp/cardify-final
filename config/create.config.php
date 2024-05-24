<?php
if (isset($_POST['submit'])) {
    require('config.php');
    $posted_set_name = htmlspecialchars($_POST['deck_name']);
    if (!empty($posted_deck_name)) { 
        $sql = "INSERT INTO deck(deck_name) VALUES(?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$posted_set_name]);
        
        header('Location: ' . '../index.php');
        exit();
        
    } else {
        header('Location: ' . '../index.php?fields=empty');
        exit();
    }
}