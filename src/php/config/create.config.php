<?php
if (isset($_POST['submit'])) {
    require('../inc/dbh.inc.php');
    require('../inc/user_info_fetcher.php');
    $posted_deck_name = htmlspecialchars($_POST['deck_name']);

    get_user($pdo);

    $sent_user_id = $result["user_id"];
    if (!empty($posted_deck_name)) { 
        $sql = "INSERT INTO deck(deck_name, user_id) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$posted_deck_name]);
        
        header('Location: ../../index.php');
        exit();
        
    } else {
        header('Location: ../../index.php?fields=empty');
        exit();
    }
}