
$(document).ready(function() {
    // Function to handle incrementing quantity
    $('.increment').click(function() {
        var $quantityInput = $(this).closest('.input-group').find('.quantity');
        var currentQuantity = parseInt($quantityInput.val());
        if (!isNaN(currentQuantity)) {
            var newQuantity = currentQuantity + 1;
            $quantityInput.val(newQuantity);
        }
    });

    // Function to handle decrementing quantity
    $('.decrement').click(function() {
        var $quantityInput = $(this).closest('.input-group').find('.quantity');
        var currentQuantity = parseInt($quantityInput.val());
        if (!isNaN(currentQuantity) && currentQuantity > 1) {
            var newQuantity = currentQuantity - 1;
            $quantityInput.val(newQuantity);
        }
    });
});