<?php
    require_once('./php/inc/dbh.inc.php');
    $deck_id = htmlspecialchars($_GET['deck_id']);

    // GET FLASHCARD DECK TITLE
    $query = "SELECT deck_name FROM deck WHERE deck_id = ?;";
    $stmt = $pdo -> prepare($query);
    $stmt -> execute([$deck_id]);
    $result = $stmt -> fetch();
    $deck_name = $result["deck_name"];

    // GET FLASHCARDS
    $query = "SELECT * FROM card WHERE deck_id = ?";
    $stmt = $pdo -> prepare($sql);
    $stmt -> execute([$deck_id]);
    $cards = $stmt -> fetchAll();

?>


