/* 
Author: James Shakespeare
Site: Traffic Digital
*/

$(function(){
   
   //center the images on the single blog post
   
     
    $("html.no-touch div.work a").hover(function(){
       
       $(this).children(".overlay").fadeIn(100);
    },
    function(){
    
       $(this).children(".overlay").fadeOut(200);
    });
    royalSliderInit();
    if($("html").attr("id") != "ie7" && $("html").attr("id") != "ie8"){
        
        //don't run on ie7 or ie8, they won't like it...
        initTriangles();
    }
});

royalSliderInit = function(){

    var args = {
        keyboardNavEnabled: true,
        autoScaleSlider: false,
        autoScaleSliderWidth: 960,
        controlNavigation: 'tabs'
    }

    $(".slides").royalSlider(args);
}

initTriangles = function(){

    //create triangle div
    $("body").prepend("<div class=\"triangles\"></div>");

    var rspread = 0, gspread = 14, bspread = 2, r = 166, g = 214, b = 208, square_width = 100;

    //how many squares in a row?
    var row_length = Math.ceil(rowlength = $(".triangles").width() / square_width);

    while($(".triangles").height() < $(window).height()){

        for(i = 1; i <= row_length; i++){
            
            var square = "<div class=\"square\" style=\"background-color: #" + genRandHex(r - rspread, r + rspread, g - gspread, g + gspread, b - bspread, b + bspread) + "\">";
            square += "<div style=\"border-left-color: #" + genRandHex(r - rspread, r + rspread, g - gspread, g + gspread, b - bspread, b + bspread) + "\" class=\"triangle\"></div>";
            square += "<div style=\"border-right-color: #" + genRandHex(r - rspread, r + rspread, g - gspread, g + gspread, b - bspread, b + bspread) + "\" class=\"triangle\"></div>";
            square += "<div style=\"border-bottom-color: #" + genRandHex(r - rspread, r + rspread, g - gspread, g + gspread, b - bspread, b + bspread) + "\" class=\"triangle\"></div>";
            square += "</div>";

            $(".triangles").append(square);
        }
    }

    $(".triangles").fadeIn(3000);

    /*var animation = window.setInterval(function(){

        var rand = Math.round(Math.random() * $(".square").length)
        $(".square").eq(rand).css({backgroundColor : "#" + genRandHex(r - rspread, r + rspread, g - gspread, g + gspread, b - bspread, b + bspread)});
    }, 100);*/
}

genRandHex = function(rmin, rmax, gmin, gmax, bmin, bmax){

    var r = Math.floor(Math.random() * (rmax - rmin + 1)) + rmin;
    var g = Math.floor(Math.random() * (gmax - gmin + 1)) + gmin;
    var b = Math.floor(Math.random() * (bmax - bmin + 1)) + bmin;
    return rgb2hex(r, g, b);
}

rgb2hex = function(r, g, b){

    var r16 = r.toString(16);
    var g16 = g.toString(16);
    var b16 = b.toString(16);
    return r16 + g16 + b16;
}