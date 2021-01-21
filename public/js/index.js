

$(document).ready(function(){
    'use strict';
    new WOW().init();
});

$(window).scroll(function(){
    $('nav').toggleClass('scrolled',$(this).scrollTop()>50);
});
