<?php
    // Check if either a deck name edit or new card was submitted
    if (isset($_POST['submit_deck_name']) || isset($_POST['submit_card'])) {
        require('../inc/dbh.inc.php');
        require_once('../inc/config_session.inc.php');
        $userId = $_SESSION["user_id"];

        // Query for deck name
        $deck_id = htmlspecialchars($_GET['deck_id']);
        $sql = "SELECT deck_name FROM deck WHERE deck_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$deck_id]);
        
        // Card is being edited
        if (isset($_POST['submit_deck_name'])) { 
            $editedName = htmlspecialchars($_POST['deck_name']);
            // A deck must have name
            if (!empty($editedName)) {
                $sql = "UPDATE deck SET deck_name = ? WHERE deck_id = ?";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$editedName, $deck_id]);
                header('Location: ../../deck.php?deck_id=' . $deck_id);
                exit();
            } else {
                header('Location: ../../deck.php?deck_id=' . $deck_id . '&fields=empty');
                exit();
            }
        }
        // New card is being added 
        else if (isset($_POST['submit_card'])) {
                $question = htmlspecialchars($_POST['card_question']);
                $answer = htmlspecialchars($_POST['card_answer']);
            if (!empty($question) && !empty($answer)) {
                $sql = "INSERT INTO card(card_question, card_answer, deck_id) VALUES (?, ?, ?);";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$question, $answer, $deck_id]);
                header('Location: ../../deck.php?deck_id=' . $deck_id);
                exit();
            } else {
                header('Location: ../../deck.php?deck_id=' . $deck_id . '&fields=empty');
                exit();
            }
        }
    } else {
        header('../../index.php');
        exit();
    }