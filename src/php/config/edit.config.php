<?php
    if (isset($_POST['submit_edit'])) {
        require('../inc/dbh.inc.php');
        require_once('../inc/config_session.inc.php');
        $userId = $_SESSION["user_id"];
        
        $card_id = htmlspecialchars($_POST['card_id']);
        $deck_id = htmlspecialchars($_POST['deck_id']);
        $card_name = htmlspecialchars($_POST['card_name']);
        $edit_question = htmlspecialchars($_POST['edit_question']);
        $edit_answer = htmlspecialchars($_POST['edit_answer']);

        if (!empty($edit_question) && !empty($edit_answer)) {
            $sql = "UPDATE card SET card_question = ?, card_answer = ? WHERE card_id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$edit_question, $edit_answer, $card_id]);
            header('Location: ' . '../../deck.php?deck_id=' . $deck_id);
            exit();
        } else {
            header('Location: ' . '../../deck.php?deck_id=' . $deck_id . '&fields=empty');
            exit();
        }
    }