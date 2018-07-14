/*	Back To Top Button
------------------------------------------------------- */
var pxShow = 300; //height on which the button will show
var fadeInTime = 400; //how slow/fast you want the button to show
var fadeOutTime = 400; //how slow/fast you want the button to hide
var scrollSpeed = 300; //how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'

// Show or hide the sticky footer button
$(window).scroll(function() {

    if ($(window).scrollTop() >= pxShow) {
        $("#go-top").fadeIn(fadeInTime);
    } else {
        $("#go-top").fadeOut(fadeOutTime);
    }

});