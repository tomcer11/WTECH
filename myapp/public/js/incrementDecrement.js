$(document).ready(function() {
    function resetActionUrl() {
        var originalUrl = $('#quantityForm').data('original-action');
        $('#quantityForm').attr('action', originalUrl);
    }
    
    $('#increment').click(function() {
        var quantity = parseInt($('#quantity').val()) + 1;
        $('#quantity').val(quantity);
    });

    $('#decrement').click(function() {
        var quantity = parseInt($('#quantity').val());
        if (quantity > 1) {
            quantity--;
            $('#quantity').val(quantity);
        }
    });

    $('#quantityForm').submit(function(event) {
        var quantity = $('#quantity').val();
        var actionUrl = $(this).attr('action') + '/' + quantity;
        $(this).attr('action', actionUrl);
        return true;
    });

    $('#quantityForm').data('original-action', $('#quantityForm').attr('action'));

    $(window).on('pageshow', function() {
        resetActionUrl();
    });
});