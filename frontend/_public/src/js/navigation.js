/****
-----This Javascript file contains all functions and events
-----manipulating with navigation elements.
****/

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

/**
 * Toggle "?" link list
 */
$(".navigation--entry.woofles--entry--service").click(function(event){
    // console.log(event);
    if (event.target.nodeName === "I" && event.target.className === "icon--service"){
        if($(".woofles--entry--service .service--list").hasClass("woofles--popup-closed")) {
            $(".woofles--entry--service .service--list").removeClass("woofles--popup-closed");
            $(".woofles--entry--service .service--list").addClass("woofles--popup-opened");
        } else {
            $(".woofles--entry--service .service--list").removeClass("woofles--popup-opened");
            $(".woofles--entry--service .service--list").addClass("woofles--popup-closed");
        }
    }
})