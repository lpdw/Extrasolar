$(document).ready(function() {
    $( '.open-responsive-menu' ).click( function() {
        $( '.responsive-menu' ).toggle( 'slow', function() {
            $( this ).toggleClass( 'active' );
        });
    });

    $('.chevronForm').each(function() {
        $(this).click(function() {
            if ($(this).hasClass('fa-chevron-down')) {
                $(this).removeClass('fa-chevron-down');
                $(this).addClass('fa-chevron-left');
                var toggle = $(this).closest('.toggleInput');
                toggle.find('.row').not('.control').slideUp();
            } else {
                $(this).addClass('fa-chevron-down');
                $(this).removeClass('fa-chevron-left');
                var toggle = $(this).closest('.toggleInput');
                toggle.find('.row').not('.control').slideDown();
            }

        });
    });
});
