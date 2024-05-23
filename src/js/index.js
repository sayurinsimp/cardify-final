const $showFormBtn = $('.show-form');
const $editDeckForm = $('.edit-deck-form');
const $addDeckForm = $('.add-deck-form');
const $form = $('.form');
const $formCancel = $('.form-cancel');

$showFormBtn.on('click', function(){
    $editDeckForm.show();
    $addDeckForm.show();
});
