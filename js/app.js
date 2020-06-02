$(document).ready(function () {

    $('.header-icon').click(function(e){
        e.preventDefault();
        toggle();
    });

    $('#shadow').click(function () {
        if ($('.menu').hasClass('menu-show')) {
            toggle();
        }
    });

    $('.menu').click(function () {
        if ($('.menu').hasClass('menu-show')) {
        toggle();
        }
    });

    function toggle() {
        $('.menu').toggleClass('menu-show');
        $('#shadow').toggleClass('shadow');
    }
});