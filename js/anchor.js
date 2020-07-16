$(document).ready(function () {
    $('.anchor-link').click(function () {
        var page = $(this).attr('href');
        var speed = 1500;

        $('html, body').animate(
            { scrollTop: $(page).offset().top - 60 },
            speed
        );

        if ($("#mentions-shadow").hasClass("mentions-shadow")){
            initMentions();
        }
    });

    $('#head-icon').click(function() {
        if ($("#mentions-shadow").hasClass("mentions-shadow")){
            initMentions();
        }
    });
});