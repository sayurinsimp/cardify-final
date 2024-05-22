<?php include('./php/inc/header.php'); ?>

    <h1 class = "text-center">Decks</h1>

    <div class="list-group main_flashcard-list">
        <?php foreach ($decks as $deck): ?>
            <a href="deck.php?deck_id=<?php echo $deck['deck_id']; ?>" class="list-group-item list-group-item-action"><?php  echo $deck['deck_name']; ?></a>
        <?php endforeach; ?>
    
        <?php include('./php/inc/empty-fields.php'); ?>
    
    </div>

    <?php include('./php/inc/forms/add-deck.form.php'); ?>
</body>
</html>

