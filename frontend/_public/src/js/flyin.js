/**
 * Script that controlls fly-in visibility and arrow direction.
 * It makes fly-in to fly in ;) (or out)
 */
$(".woofles--flyin-banner-label-wrapper").click(function(){
    if($(".woofles--flyin-banner-wrapper").hasClass("w--is-closed")){
        //OPEN/SHOW
        $(".woofles--flyin-banner-wrapper").removeClass("w--is-closed");
        $(".woofles--flyin-banner-wrapper").addClass("w--is-opened");
        
        //BOTTOM-RIGHT
        $(".woofles--flyin-position-bottom_right .woofles--flyin-banner-label-wrapper i").removeClass("icon--arrow-up");
        $(".woofles--flyin-position-bottom_right .woofles--flyin-banner-label-wrapper i").addClass("icon--arrow-down");
        //BOTTOM-LEFT
        $(".woofles--flyin-position-bottom_left .woofles--flyin-banner-label-wrapper i").removeClass("icon--arrow-up");
        $(".woofles--flyin-position-bottom_left .woofles--flyin-banner-label-wrapper i").addClass("icon--arrow-down");
        //RIGHT
        $(".woofles--flyin-position-right .woofles--flyin-banner-label-wrapper i").removeClass("icon--arrow-right");
        $(".woofles--flyin-position-right .woofles--flyin-banner-label-wrapper i").addClass("icon--arrow-left");
        //LEFT
        $(".woofles--flyin-position-left .woofles--flyin-banner-label-wrapper i").removeClass("icon--arrow-right");
        $(".woofles--flyin-position-left .woofles--flyin-banner-label-wrapper i").addClass("icon--arrow-left");
    } else {
        //CLOSE/HIDE
        $(".woofles--flyin-banner-wrapper").removeClass("w--is-opened");
        $(".woofles--flyin-banner-wrapper").addClass("w--is-closed");
        
        //BOTTOM-RIGHT
        $(".woofles--flyin-position-bottom_right .woofles--flyin-banner-label-wrapper i").addClass("icon--arrow-up");
        $(".woofles--flyin-position-bottom_right .woofles--flyin-banner-label-wrapper i").removeClass("icon--arrow-down");
        //BOTTOM-LEFT
        $(".woofles--flyin-position-bottom_left .woofles--flyin-banner-label-wrapper i").addClass("icon--arrow-up");
        $(".woofles--flyin-position-bottom_left .woofles--flyin-banner-label-wrapper i").removeClass("icon--arrow-down");
        //RIGHT
        $(".woofles--flyin-position-right .woofles--flyin-banner-label-wrapper i").addClass("icon--arrow-right");
        $(".woofles--flyin-position-right .woofles--flyin-banner-label-wrapper i").removeClass("icon--arrow-left");
        //LEFT
        $(".woofles--flyin-position-left .woofles--flyin-banner-label-wrapper i").addClass("icon--arrow-right");
        $(".woofles--flyin-position-left .woofles--flyin-banner-label-wrapper i").removeClass("icon--arrow-left");
    }
})