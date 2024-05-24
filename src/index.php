<!-- HEADER START -->
<?php include('./php/inc/header_logged_in.php'); ?>
<!-- HEADER END -->

    <div class = "container main">
        <!-- LISTS FLASHCARD DECKS AVAILABLE -->
        <h1 class = "text-center deck-title-container">Decks</h1>
        <div class = "deck-list">
        <?php if ($decks){
            foreach ($decks as $deck): ?>
            <a href="deck.php?deck_id=<?php echo $deck['deck_id']; ?>" class="list-group-item list-group-item-action"><?php  echo $deck['deck_name']; ?></a>
                <?php endforeach; }?>
                <?php 
                    if (!$decks){
                        echo '<h3 class = "text-center">Deck list is currently empty! Create a deck!</h4>';
                    }
                ?>
            <!-- LISTS FLASHCARD DECKS AVAILABLE -->
            <!-- IF EMPTY FIELDS EXIST -->
            <?php include('./php/inc/empty-fields.php'); ?>
            <!-- IF EMPTY FIELDS EXIST -->
        </div>
            

            <!-- ADD DECK FORM -->
            <?php include('./php/inc/forms/add-deck.form.php'); ?>
            <!-- ADD DECK FORM -->

            <div class = "text-center main-add-deck mt-4">
                <button class = "positive show-form add-new-deck-button "><i class="fa fa-plus-square" aria-hidden="true"></i>Add New Deck</button>
                <!-- <button class = "negative test-button text_center">Test Button</button> -->
            </div>
    </div>

</body>
</html>

