/****
-----This Javascript file contains all functions and events
-----manipulating with off-canvas components and their child-elements.
****/

/**
 * This event is responsible for hiding off-canvas window on "< Close menu" click.
 */
$('.woofles--close-off-canvas-window').click(function(){
    $(this).parent().toggleClass("woofles--popup-closed");
    $(this).parent().toggleClass("woofles--popup-opened");
    $('.woofles--popup-overlay').fadeOut();
})