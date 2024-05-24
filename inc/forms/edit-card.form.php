<form action="config/edit.config.php" class="form container py-2" method="POST">
    <div class="form-group">
        <label for="q">Question:</label>
        <input 
            value="<?php echo $card['question']; ?>" 
            class="form-control" 
            type="text" 
            id="q" 
            name="edit_question">
    </div>
    <div class="form-group">
        <label for="a">Answer:</label>
        <input 
            value="<?php echo $card['answer']; ?>" 
            class="form-control" 
            type="text" 
            id="a" 
            name="edit_answer">
    </div>
    <!-- Hidden input to get card id, deck_name, and deck_id -->
    <input type="hidden" name="card_id" value="<?php echo $card['card_id']; ?>"/>
    <input type="hidden" name="deck_name" value="<?php echo $deck_name; ?>"/>
    <input type="hidden" name="deck_id" value="<?php echo $deck_id; ?>"/>
    <!-- /Hidden fields -->
    <input type="submit" name="submit_edit" value="Submit" class="btn btn-primary">
    <button class="btn btn-secondary form-cancel" type="button">Cancel</button>
</form>