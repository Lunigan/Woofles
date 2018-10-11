$('.woofles--close-off-canvas-window').click(function(){
    $(this).parent().toggleClass("woofles--popup-closed");
    $(this).parent().toggleClass("woofles--popup-opened");
    $('.woofles--popup-overlay').fadeOut();
})