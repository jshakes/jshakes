/* 
Author: James Shakespeare
Site: Traffic Digital
*/

$(function(){
   
   $("a#showreel-play").click(function(e){
       e.preventDefault();
       showreelPlay();  
   });
    
});

showreelPlay = function(){
    
    $(".wrapper.intro .video-container").fadeIn().children("iframe").attr("src", "http://player.vimeo.com/video/32444506?title=0&amp;byline=0&amp;portrait=0&amp;color=e00500");
    $(".wrapper.intro").animate({height: 530});
}