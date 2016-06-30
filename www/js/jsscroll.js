$(window).scroll(function(e) {  

  if($(window).height()  <= 480){
      if($(window).scrollTop() >=240) {
        $(window).scrollTop(240)
    }
      
      
  }else if($(window).height()  > 480 && $(window).height()  <= 600 ){
       if($(window).scrollTop() >=100) {
        $(window).scrollTop(100)
    }
  }
    
});
