+''

$(document).ready(function(){
    $("#pi").css('-moz-column-width',$("#prodottosingolo").css('width'));
     $("#pi").css('-webkit-column-width',$("#prodottosingolo").css('width'));
     $("#pi").css('column-count',$("#prodottosingolo").css('width'));
  
               
})

$(document).on('mouseenter','#nextbtn', function(){
    $colore = $("#nextbtn").css('border-color');
    $("#nextbtn").css('background-color', $colore);
    
    
    $("#nextbtnin").css("border-color","transparent transparent transparent white");
    
});


$(document).on('mouseleave','#nextbtn', function(){
    if(!($("#nextbtnin").is(':hover'))){
         $colore = $("#nextbtn").css('border-color');
    $("#nextbtn").css('background-color', "white");
    
    
    $("#nextbtnin").css("border-color","transparent transparent transparent " + $colore);
    
    }
   
});
var clicked = 0;
$(document).on('click', '#nextbtn', function(){
    $old = $("#pi").scrollLeft();
    var overflow = $("#pi").get(0);
   
    var moveby =  parseInt($("#prodottosingolo").css('width'), 10) * 3;

    
   $new = $old + moveby + (56*4);
    
    $("#pi").animate({scrollLeft: $new}, function(){
        var after = $("#pi").scrollLeft();
        if (after === $old){
            $("#pi").animate({scrollLeft: 0})
        }
    });

      
});



