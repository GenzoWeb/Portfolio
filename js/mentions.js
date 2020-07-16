$(document).ready(function(){

    $("#mentions-shadow").click(function() {
        if ($("#mentions-shadow").hasClass("mentions-shadow")){
            initMentions();
        }
    });

    $("#mentions").click(function() {
            initMentions();
    });

    $("#link-mentions").click(function() {
        initMentions();

        if($('#mentions').hasClass('mentions-active')){
            let heightPage = $('html').height() + $('footer').height();
            $('.mentions-shadow').css('height' , heightPage);
        }
    });
});