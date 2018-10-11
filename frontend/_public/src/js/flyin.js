/****
-----This Javascript file contains all functions and events
-----manipulating with fly-in component and its child-elements.
****/

/**
 * Script that controlls fly-in visibility and arrow direction.
 * It makes fly-in to fly in ;) (or out).
 */
$(".woofles--flyin-banner-label-wrapper").click(function(){
    if($(".woofles--flyin-banner-wrapper").hasClass("woofles--popup-closed")){
        ShowFlyIn();
    } else {
        HideFlyIn();
    }
})

/**
 * Event that detects click inside of the "fly-in" element and stops it 
 * before it  reaches the event on "body" which would close the "fly-in".
 */
$(".woofles--flyin-banner-wrapper").click(function(event){
    event.stopPropagation();
})

/**
 * This function handles classes management to make "fly-in" visible.
 */
function ShowFlyIn(){
    //OPEN/SHOW
    $(".woofles--flyin-banner-wrapper").removeClass("woofles--popup-closed");
    $(".woofles--flyin-banner-wrapper").addClass("woofles--popup-opened");
    
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
}

/**
 * This function handles classes management to make "fly-in" hidden.
 */
function HideFlyIn(){
    //CLOSE/HIDE
    $(".woofles--flyin-banner-wrapper").removeClass("woofles--popup-opened");
    $(".woofles--flyin-banner-wrapper").addClass("woofles--popup-closed");
    
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