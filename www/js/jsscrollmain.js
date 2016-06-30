$(window).scroll(function(){
    if ($(window).scrollTop() == $(document).height() - $(window).height()) {
       alert('At Bottom');
    }
});