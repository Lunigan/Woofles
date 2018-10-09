// If an event gets to the body
$("body").click(function(){

    $('.woofles--popup-opened').each(function(){
        $(this).addClass('woofles--popup-closed');
        $(this).removeClass('woofles--popup-opened');
    })

    HideFlyIn();

    $('.woofles--popup-overlay').fadeOut();
});