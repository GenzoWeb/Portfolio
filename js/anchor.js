$(document).ready(function () {
    $('.anchor-link').click(function () {
        var page = $(this).attr('href');
        var speed = 1500;

        $('html, body').animate(
            { scrollTop: $(page).offset().top - 60 },
            speed
        );
    });
});