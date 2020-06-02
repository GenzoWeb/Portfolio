$(document).ready(function () {

    if (navigator.userAgent.indexOf('Trident') > -1 || navigator.userAgent.indexOf('MSIE') > -1) {
        $('.parallax').css('background-attachment', 'inherit');
    }

    const ratioImg = 1920 / 1275;
    const menuHeight = 50;

    function resize() {
        let heightImg = Math.floor($(window).width() / ratioImg - menuHeight);
        $('.parallax').css('background-size', $(window).width());
        $('.parallax').css('min-height', heightImg);
    }

    window.onresize = resize;
    resize();

});