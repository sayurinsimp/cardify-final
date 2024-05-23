$(document).ready(function() {

    const $showFormBtn = $('.show-form');
    const $editSetForm = $('.edit-deck-form');
    const $addSetForm = $('.add-deck-form');
    const $form = $('.form');
    const $formCancel = $('.form-cancel');
    
    $showFormBtn.on('click', function(){
        $editSetForm.show();
        $addSetForm.show();
    });
    
    /**
     * The cancel button for a card edit hides
     * one div and shows the other.  The if statement
     * checks for which cancel is clicked
     */
    $formCancel.on('click', function(){
        const $isCardEdit = $(this).parent().parent().hasClass('edit-card');
        const $isCardCancel = $(this).parent().prev().hasClass('add-card');
        
        // Check if cancel is from a card edit
        if ($isCardEdit) {
            const $editCard = $(this).parent().parent();
            const $card = $(this).parent().parent().prev();
            $editCard.hide();
            $card.show();
        } else if ($isCardCancel) {
            const $addCard = $(this).parent().prev();
            $addCardForm.hide();
            $addCard.show();
        }
        // Normal form cancel 
        else {
            $(this).parent().hide();
        }
        
    });
});