$(document).ready(function() 
{   
    $('a[id=modal]').click(function() 
    {
        $('body').css('overflow', 'hidden');
        var id = $(this).attr('href');

        $('#mask').css({'width': '100%','height': '100%'});
        $('#mask').fadeTo("slow",0.8);
        $(id).fadeIn(1000);
        var winH = $(window).height();
        var winW = $(window).width();
         
        $(id).css('top',  winH/2-$(id).height()/2);
        $(id).css('left', winW/2-$(id).width()/2); 
    });
    
    $('#mask').click(function () 
    {
        $(this).hide();
        $('.window').hide();
        $('body').css('overflow', 'auto');     
    }); 
});  