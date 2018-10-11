/****
-----This Javascript file contains all functions and events
-----manipulating with off-canvas components and their child-elements.
****/

/**
 * This event handles opening/closing of login window + overlay in case of off-canvas version.
 */
$(".navigation--entry.entry--account .icon--account").click(function(event){
    
    if($(".woofles--login-window").hasClass("woofles--popup-closed")) {
        $(".woofles--login-window").toggleClass("woofles--popup-closed");
        $(".woofles--login-window").toggleClass("woofles--popup-opened");
        
        if ($('.woofles--login-popup').length == 0) {
            $('.woofles--popup-overlay').fadeIn();
        }
    } else {
        $(".woofles--login-window").toggleClass("woofles--popup-opened");
        $(".woofles--login-window").toggleClass("woofles--popup-closed");
        $('.woofles--popup-overlay').fadeOut();
    }
    
    event.stopPropagation();
})

/**
 * Event that detects click inside of the login window and stops it 
 * before it  reaches the event on "body" which would close the the login window.
 */
$(".woofles--login-window").click(function(event){
    event.stopPropagation();
})