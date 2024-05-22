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
    $stmt = $pdo -> prepare($query);
    $stmt -> execute([$deck_id]);
    $cards = $stmt -> fetchAll();

?>

<?php include('./php/inc/header.php'); ?>

<div class="text-center">
    <h1 class = $deck_name>
        <?php echo $deck_name; ?>
    </h1>

    <?php include('./php/inc/empty-fields.php'); ?>

    <?php include('./php/inc/forms/add-deck.form.php'); ?>
</div>
