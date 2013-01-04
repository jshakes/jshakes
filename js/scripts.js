/* 
Author: James Shakespeare
Site: Traffic Digital
*/

$(function(){
   
   //center the images on the single blog post
   
     
    $("div.work a").hover(function(){
       
       $(this).children(".overlay").fadeIn(100);
    },
    function(){
    
       $(this).children(".overlay").fadeOut(200);
    });
    //backgroundScrollInit();
    royalSliderInit();
});

royalSliderInit = function(){

    var args = {
        keyboardNavEnabled: true
    }

    $(".slides").royalSlider(args);
}

backgroundScrollInit = function(){
    /*
    The background will scroll up at 25% of the amount the window is scrolled down (y / 4)
    */
    $(window).scroll(function() {
        var y = $(this).scrollTop();
        $("body#home #header-wrapper").css('background-position', '50% ' + parseInt(-y * 0.5) + 'px');
    });
    
}