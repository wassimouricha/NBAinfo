$(".containere > div:gt(0)").hide();  //script permettant l'animation des fades pour mes slides


setInterval(function() { 
  $('.containere > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('.containere');
}, 5000);


