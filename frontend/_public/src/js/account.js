
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

$(".woofles--login-window").click(function(event){
    event.stopPropagation();
})

// If an event gets to the body
$("body").click(function(){
    $('.woofles--popup-opened').each(function(){
        $(this).addClass('woofles--popup-closed');
        $(this).removeClass('woofles--popup-opened');
    })
    $('.woofles--popup-overlay').fadeOut();
});