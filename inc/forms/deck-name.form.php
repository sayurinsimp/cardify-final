<form 
    method="POST" 
    action="config/deck.config.php?deck_id=<?php echo $deck_id; ?>" 
    class="form edit-deck-form">
    <div class="form-group mt-3">
        <label for="user_deck_name">Deck Name</label>
        <input value="<?php echo $deck_name; ?>" type="text" name="deck_name" id="user_deck_name" class="form-control">
    </div>
    <input type="submit" name="submit_deck_name" value="Submit" class="btn btn-primary">
    <button type="button" class="btn btn-secondary form-cancel">Cancel</button>
</form>