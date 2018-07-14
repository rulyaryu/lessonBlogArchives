/* Mobile Menu
------------------------------------------------------ */
var toggle_button = $("<a>", {
    id: "toggle-btn",
    html : "Menu",
    title: "Menu",
    href : "#" }
);
var nav_wrap = $('nav#nav-wrap')
var nav = $("ul#nav");

/* if JS is enabled, remove the two a.mobile-btns
and dynamically prepend a.toggle-btn to #nav-wrap */
nav_wrap.find('a.mobile-btn').remove();
nav_wrap.prepend(toggle_button);

toggle_button.on("click", function(e) {
    e.preventDefault();
    nav.slideToggle("fast");
});

if (toggle_button.is(':visible')) nav.addClass('mobile');
$(window).resize(function(){
    if (toggle_button.is(':visible')) nav.addClass('mobile');
    else nav.removeClass('mobile');
});

$('ul#nav li a').on("click", function(){
    if (nav.hasClass('mobile')) nav.fadeOut('fast');
});