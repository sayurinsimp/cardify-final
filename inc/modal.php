<!-- Button trigger modal -->
<div class="modal-trigger text-center">
  <button type="button" class="btn btn-danger mb-4" data-toggle="modal" data-target="#delete-modal">
              Delete Deck
  </button>
</div>

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="Delete Deck" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete <b><?php echo $deck_name; ?></b> deck?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>You will not be able to recover this deck once it's deleted.  Are you sure you want to delete this deck?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form action="config/delete.config.php?deck_id=<?php echo $deck_id; ?>" method="POST">
            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
            <input type="hidden" name="deck_name" value="<?php echo $deck_name; ?>">
        </form>
      </div>
    </div>
  </div>
</div>