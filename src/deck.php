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

<?php include('./php/inc/header_logged_in.php'); ?>

<div class = "container">

    <div class="text-center main">
        <h1 class = $deck_name>
            <?php echo $deck_name; ?>
        </h1>
        
        <?php include('./php/inc/empty-fields.php'); ?>
        
        <!-- Edit Set Name Form -->
        
        <?php include('./php/inc/forms/deck-name.form.php'); ?>
        
        <!-- /Edit Set Name Form -->
        
        <button type="button" class="positive show-form edit-deck-button mt-3">Edit Deck Name</button>
        
    </div>
    
    <!-- Cards -->
    <div class="cards">
        <?php foreach($cards as $card): ?>
            <div class="card show_answer">
                <div class="card__edit">
                    <button class="btn btn-light" type="button">Edit</button>
                </div>
                <div class="card-body">
                    <p class="card-text card_question text-center"><?php echo $card['card_question']; ?></p>
                    <p class="card-text card_answer text-red text-center"><?php echo $card['card_answer']; ?></p>
                </div>
            </div>
            <div class="card edit-card">
                <?php include('./php/inc/forms/edit-card.form.php'); ?>
            </div>
            <?php endforeach; ?>
            <div class="card add-card text-muted">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Add Card
            </div>
            
            
            <!-- Add Card Form -->
            
            <?php include('./php/inc/forms/add-card.form.php'); ?>
            
        <!-- /Add Card Form -->

    </div>
    <!-- /Cards -->
    <div class="my-3">
        <?php include('./modal.php'); ?>
    </div>
</div>
    
    