/**
 * This Javascript file contains all functions and events
 * manipulating with navigation elements.
 */

/**
 * This event is responsible for hiding navigation bar in header on scroll-down.
 * Can be turned off in backend configuration in "Header" tab.
 */
$('body.woofles--hide-navigation-on-scroll').on('mousewheel', function(e){
    if(e.originalEvent.wheelDelta > 0)
    {
        $('.woofles--header-wrapper .navigation-main').removeClass('woofles--is-hidden');
        $('.woofles--header-wrapper .header-main').removeClass('woofles--nav-hidden');
    }
    else
    {
        $('.woofles--header-wrapper .navigation-main').addClass('woofles--is-hidden');
        $('.woofles--header-wrapper .header-main').addClass('woofles--nav-hidden');
    }
});