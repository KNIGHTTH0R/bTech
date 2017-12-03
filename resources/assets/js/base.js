/**
 * Here are some basic features that are used on multiple pages
 */

var $ = require("jquery");

/**
 * Мобільне меню
 */
$('.nav-icon').click(function () {
    $(this).siblings('.mob-nav').toggleClass('visible');
    $(this).toggleClass('change');
});

$('.user-nav-icon').click(function () {
    $('aside.sidebar').toggleClass('open');
});