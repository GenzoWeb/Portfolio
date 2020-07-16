function initMentions(){
    $('.mentions-shadow').css('height' , "");
    $('#mentions').toggleClass('mentions-active');
    $('#mentions-shadow').toggleClass('mentions-shadow');
    
    if($('#mentions').hasClass('mentions-active')){
        let widthMentions = parseInt($('#mentions').css('margin-left')) * -1;
        $('#mentions').css('transform' , 'translate(' + widthMentions + 'px)');
    }
    else
    {
        $('#mentions').css('transform' , "");
    }
}