$(window).scroll(function(){
  
  var wScroll = $(this).scrollTop();
  
  $('.logo').css({
    'transform' : 'translate(0px, ' + wScroll /2 +'%)'
  });
  
  if(wScroll > $('.item').offset().top - ($(window).height() / 1.3)) {
    
    $('.item').each(function(i){
      
      setTimeout(function(){
        $('.item').eq(i).addClass('is-showing');
      }, 150 * (i + 1));
    });
    
  };
  
});