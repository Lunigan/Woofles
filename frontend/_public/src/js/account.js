$(".navigation--entry.entry--account").click(function(event){
    console.log(event);
    if (event.target.nodeName === "I" && event.target.className === "icon--account"){
        if($(".woofles--login-popup-enabled").hasClass("woofles--popup-closed")) {
            $(".woofles--login-popup-enabled").removeClass("woofles--popup-closed");
            $(".woofles--login-popup-enabled").addClass("woofles--popup-opened");
        } else {
            $(".woofles--login-popup-enabled").removeClass("woofles--popup-opened");
            $(".woofles--login-popup-enabled").addClass("woofles--popup-closed");
        }
    } else if (event.target.name === "Submit" || event.target.parentElement.name === "Submit"){
        console.log("submit clicked");
        $(".woofles--login-popup-enabled.woofles--popup-opened form").submit();
    }
    
})