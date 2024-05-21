<form method="POST" action="./php/inc/config_session.inc.php" class="form add-deck-form">
    <div class="form-group mt-3">
        <label for="user_deck_name">Deck Name</label>
        <input value="<?php  echo isset($deck_id) ? $deck_name : '' ?>" type="text" name="deck_name" id="user_deck_name" class="form-control">
    </div>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
    <button type="button" class="btn btn-secondary form-cancel">Cancel</button>
</form>
