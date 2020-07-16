$(document).ready(function () {
    if (navigator.userAgent.indexOf('Trident') > -1 || navigator.userAgent.indexOf('MSIE') > -1) {
        $('.parallax').css('background-attachment', 'inherit');
    }

    const ratioImg = 1920 / 1275;
    const menuHeight = 50;

    function resizeImage() {
        let heightImg = Math.floor($(window).width() / ratioImg - menuHeight);
        $('.parallax').css('background-size', $(window).width());
        $('.parallax').css('min-height', heightImg);
    }

    function resizeMentions() {
        let hauteurMentions = $('html').height() - parseInt($('#mentions').css('height')) - $('footer').height();
        $('#mentions').css('top' , hauteurMentions);
    }

    window.onresize = function(){
        resizeImage();
        resizeMentions();

        if ($("#mentions-shadow").hasClass("mentions-shadow")){
            initMentions();
        }
    }

    resizeImage();
    resizeMentions();
});