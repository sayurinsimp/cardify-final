<!-- HEADER START -->
<?php include('./php/inc/header.php'); ?>
<!-- HEADER END -->

    <div class = "container main">
        <!-- LISTS FLASHCARD DECKS AVAILABLE -->
        <h1 class = "text-center">Decks</h1>
        <div class="list-group main_flashcard-list">
        <?php foreach ($decks as $deck): ?>
            <a href="deck.php?deck_id=<?php echo $deck['deck_id']; ?>" class="list-group-item list-group-item-action"><?php  echo $deck['deck_name']; ?></a>
                <?php endforeach; ?>
            <!-- LISTS FLASHCARD DECKS AVAILABLE -->
        </div>
            
            <!-- IF EMPTY FIELDS EXIST -->
            <?php include('./php/inc/empty-fields.php'); ?>
            <!-- IF EMPTY FIELDS EXIST -->

            <!-- ADD DECK FORM -->
            <?php include('./php/inc/forms/add-deck.form.php'); ?>
            <!-- ADD DECK FORM -->

            
            <div class="add-set mt-4 text-center">
            <button class="main_add-set show-form btn btn-primary">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
                Add New Set
            </button>
    </div>
    </div>
    
</body>
</html>
