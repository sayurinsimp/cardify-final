<?php
    require('config/config.php');
    $deck_id = htmlspecialchars($_GET['deck_id']);

    // Get Deck title
    $sql = "SELECT deck_name FROM deck WHERE deck_id = ?;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$deck_id]);
    $result = $stmt->fetch();
    $deck_name = $result["deck_name"];

    // Get cards
    $sql = "SELECT * FROM card WHERE deck_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$deck_id]);
    $cards = $stmt->fetchAll();
    
?>

<?php include('./inc/header.php'); ?>
    <div class="text-center mt-2 mb-3">
        <h1 class="deck-title">
            <?php echo $deck_name; ?>
        </h1>
        
        <!-- Empty Fields Message -->

        <?php include('inc/empty-fields.php'); ?>
        
        <!-- /Empty Fields Message -->

        <!-- Edit Deck Name Form -->
        
        <?php include('inc/forms/deck-name.form.php'); ?>

        <!-- /Edit Deck Name Form -->

        <button type="button" class="show-form btn btn-outline-secondary mt-3">Edit Deck Name</button>
    </div>

    <!-- Cards -->
    <div class="cards">
        <?php foreach($cards as $card): ?>
        <div class="card show_answer">
            <div class="card__edit">
                <button class="btn btn-light" type="button">Edit</button>
            </div>
            <div class="card-body">
                <p class="card-text question"><?php echo $card['question']; ?></p>
                <p class="card-text answer"><?php echo $card['answer']; ?></p>
            </div>
        </div>
        <div class="card edit-card">
            <?php include('inc/forms/edit-card.form.php'); ?>
        </div>
        <?php endforeach; ?>
        <div class="card add-card text-muted">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Add Card
        </div>
        

        <!-- Add Card Form -->

        <?php include('inc/forms/add-card.form.php'); ?>

        <!-- /Add Card Form -->

    </div>
    <!-- /Cards -->
    <div class="my-3">
        <?php include('./inc/modal.php'); ?>
    </div>
