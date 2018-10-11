/****
-----This Javascript file contains all general functions and events.
****/

/**
 * This event is responsible for hiding off-canvas window on click anywhere outside the window.
 */
$("body").click(function(){

    $('.woofles--popup-opened').each(function(){
        $(this).addClass('woofles--popup-closed');
        $(this).removeClass('woofles--popup-opened');
    })

    HideFlyIn();

    $('.woofles--popup-overlay').fadeOut();
});