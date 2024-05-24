<!-- HEADER START -->

<?php include('./inc/header.php'); ?>

<!-- HEADER END -->

<!-- LISTS FLASHCARD DECKS -->
    <h1 class="text-center">Flashcard List</h1>
    <div class="list-group main__flashcard-list">
        <?php foreach ($decks as $deck): ?>
            <a href="deck.php?deck_id=<?php echo $deck['deck_id']; ?>" class="list-group-item list-group-item-action"><?php  echo $deck['deck_name']; ?></a>
        <?php endforeach; ?>

        <!-- Empty Fields Message -->

        <?php include('inc/empty-fields.php'); ?>

        <!-- /Empty Fields Message -->
        
    </div>

    
    
    <!-- Add set form -->

    <?php include('inc/forms/add-deck.form.php'); ?>

    <!-- /Add set form -->
    
    <div class="add-deck mt-4 text-center">
        <button class="main__add-deck show-form btn btn-primary">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
            Add New Deck
        </button>
    </div>

