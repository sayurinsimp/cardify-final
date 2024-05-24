<?php
    if (isset($_POST['delete'])) {
        require('../inc/dbh.inc.php');
        $deck_id = htmlspecialchars($_GET['deck_id']);
        $deck_name = htmlspecialchars($_POST['deck_name']);

        $stmt = $pdo->prepare("DELETE FROM card WHERE deck_id = :deck_id");
        $stmt->execute(['deck_id' => $deck_id]);
        
        $sql = "DELETE FROM deck WHERE deck_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$deck_id]);

        header('Location: ' . '../../index.php' . '');
        exit();
    }
?>