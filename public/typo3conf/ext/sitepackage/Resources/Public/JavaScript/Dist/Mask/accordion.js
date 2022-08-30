$( document ).ready(function() {
    $('.accordion-header').click(function() {
        var clickedHeader = $( this ).children();
        var clickedEl = $( this ).siblings();
        $('.accordion-collapse').not(clickedEl).each(function(){
            $(this).slideUp();
        });
        $('.accordion-button').not(clickedHeader).each(function(){
            $(this).addClass('collapsed');
        });
        clickedEl.slideToggle()
        clickedHeader.toggleClass('collapsed');
    });
});